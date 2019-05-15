<?php

namespace Modules\ContactModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mail;

class ContactModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contactmodule::index');
    }

    public function sendmail(Request $request)
    {
        $data['title'] = "<h1>test</h1>";
 
        
        Mail::send('contactmodule::email', $data, function($message) {
            $message->to('ugd24jam@gmail.com', 'Receiver Name')->subject('PT. TON');
        });

 
        if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
        }
        else {
           return response()->success('Great! Successfully send in your mail');
        }
    }

}
