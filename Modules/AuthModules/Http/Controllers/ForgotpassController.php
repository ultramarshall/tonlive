<?php

namespace Modules\AuthModules\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ForgotpassController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('authmodules::forgotPassword');
    }

    public function forgot_password(Request $request){
        $email = $request->email;
        /*if (User::forgot($email)) {
            
        }*/
        return response()->json('asdasd');
    }
   
}
