<?php

namespace Modules\RegistratioPartnernModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use DB;
use Mail;
use Crypt;
use Hash;
use PDF;

class RegistratioPartnernModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = [
            'vendor_type' => DB::table('user_vendor_type')->get(),
            'bussiness_type' => DB::table('bussiness_type')->get(),
            'provinces' => \App\Model\Province::all(),
        ];
        return view('registratiopartnernmodule::index', $data);
    }

    public function success()
    {
        return view('registratiopartnernmodule::success');
    }

    public function get_regencies(Request $request) {
        $id = $request->id;
        $result = \App\Model\Regency::where('province_id', $id)->get();
        $option = '';
        foreach ($result as $value) {
            $option .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        echo $option;
    }
    public function get_districts(Request $request) {
        $id = $request->id;
        $result = \App\Model\District::where('regency_id', $id)->get();
        $option = '';
        foreach ($result as $value) {
            $option .= '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
        echo $option;
    }

    public function store(Request $request)
    {
        // validation by server side
        $request->validate([
            'email' => 'required|email|unique:users,email,NULL',
        ]);

        //insert into db
        $generate_password  = Str::random(12);
        $password           = Crypt::encryptString($generate_password);

        DB::table('user_vendor')->insert([
            'email'                 => $request->post('email'),
            'password'              => $password,
            'company_name'          => $request->post('company_name'),
            'office_number'         => $request->post('phone'),
            'phone'                 => $request->post('hp'),
            'npwp'                  => $request->post('npwp'),
            'fax'                   => $request->post('fax'),
            'province'              => $request->post('province'),
            'regencies'             => $request->post('regencies'),
            'districts'             => $request->post('districts'),
            'address'               => $request->post('address'),
            'postal_code'           => $request->post('postal_code'),
            'user_vendor_type_id'   => $request->post('vendor_type'),
            'bussiness_type_id'     => $request->post('company_type')
        ]);
        
        //send message to admin
        

        //send message to vendor user
        $pdf = PDF::loadView('registratiopartnernmodule::mail_vendor', ['password' => $generate_password])->stream();
        $email = $request->email;
        Mail::send('registratiopartnernmodule::mail_vendor', ['pdf'=>$pdf], function($message, $email) use ($pdf)
        {
           $message->to($email, 'Receiver Name')->subject('PT. TON');
           $message->attachData($pdf, 'invoice.pdf');
        });

        //send message to ajax respon
        return response()->json(true);

    }

 



}
