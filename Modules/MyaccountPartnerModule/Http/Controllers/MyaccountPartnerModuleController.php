<?php

namespace Modules\MyaccountPartnerModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AuthModules\Http\Middleware\Doi;
use MyAccounts;
use Validator;
use DB;


class MyaccountPartnerModuleController extends Controller
{
   
    public function index()
    {
        return view('myaccountpartnermodule::index');
    }

    public function mydocument()
    {
        return view('myaccountpartnermodule::document');
    }

    public function get_pages(Request $request){
        switch ($request->pages) {
            case 'identitas':
                $data = [
                    'vendor' => MyAccounts::get_identitas(),
                    'provinces' => \App\Model\Province::all(),
                    'company_type' => MyAccounts::company_type(),
                ];
                return view('myaccountpartnermodule::pages.identitas', $data);
                break;
            
            case 'izin':
                $data['izin'] = MyAccounts::get_izin();
                return view('myaccountpartnermodule::pages.izin', $data);
                break;
            
            case 'akta':
                $data['akta'] = MyAccounts::get_akta();
                return view('myaccountpartnermodule::pages.akta', $data);
                break;
            
            case 'pengurus':
                $data['pengurus'] = MyAccounts::get_pengurus();
                return view('myaccountpartnermodule::pages.pengurus', $data);
                break;
            
            case 'tenaga-ahli':
                $data['tenaga_ahli'] = MyAccounts::get_tenaga_ahli();
                return view('myaccountpartnermodule::pages.tenaga_ahli', $data);
                break;
            
            case 'pemilik':
                $data['pemilik'] = MyAccounts::get_pemilik();
                return view('myaccountpartnermodule::pages.pemilik', $data);
                break;

            case 'peralatan':
                $data['peralatan'] = MyAccounts::get_peralatan();
                return view('myaccountpartnermodule::pages.peralatan', $data);
                break;

            case 'pengalaman':
                $data['pengalaman'] = MyAccounts::get_pengalaman();
                return view('myaccountpartnermodule::pages.pengalaman', $data);
                break;

            case 'pajak':
                return view('myaccountpartnermodule::pages.pajak');
                break;
            
            default:
                return "<section class='py-8 text-center'>
                          <h1 class=>404</h1>
                          <h5 class=>page not found</h5>
                        </section>";
                break;
        }
    }

    public  function set_identity(Request $request) {
        return MyAccounts::set_identitas($request);
    }

    public  function set_akta(Request $request) {
        $validator = Validator::make($request->all(), [
            'acta_document' => 'required|mimes:pdf|max:2048',
        ]);
        if ($validator->passes()) {
            $input = $request->all();
            $input['acta_document'] = time().'.'.$request->acta_document->getClientOriginalExtension();
            $request->acta_document->move(public_path('document'), $input['acta_document']);
            return response()->json(['success'=>'Berhasil']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
        // return MyAccounts::set_akta($request);
    }

    public  function set_pemilik(Request $request) {
        return MyAccounts::set_pemilik($request);
    }

    public  function set_peralatan(Request $request) {
        return MyAccounts::set_peralatan($request);
    }
    public  function update_peralatan(Request $request) {
        return MyAccounts::edit_peralatan($request);
    }

    public  function set_pengalaman(Request $request) {
        return MyAccounts::set_pengalaman($request);
    }
    public  function update_pengalaman(Request $request) {
        return MyAccounts::edit_pengalaman($request);
    }

    public  function set_tenaga_ahli(Request $request) {
        return MyAccounts::set_tenaga_ahli($request);
    }
    public  function update_tenaga_ahli(Request $request) {
        return MyAccounts::edit_tenaga_ahli($request);
    }

    public  function set_pengurus(Request $request) {
        return MyAccounts::set_pengurus($request);
    }
    public  function update_pengurus(Request $request) {
        return MyAccounts::edit_pengurus($request);
    }


    public  function set_izin(Request $request) {
        return MyAccounts::set_izin($request);
    }
    public  function update_izin(Request $request) {
        return MyAccounts::edit_izin($request);
    }

}
