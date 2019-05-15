<?php

namespace Modules\AuthModules\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\AuthModules\Http\Middleware\Doi;
use Crypt;
use App;
use PDF;
use Mail;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('authmodules::login');
    }

    public function loginCheck(Request $request) 
    {
    	$result = Doi::login($request->email, $request->password);
    	if ($result) 
    		return response()->json($result);
		else
			return response()->json($result);
    }

    public function logout() {
        if(Doi::logout()) return redirect('/');
    }

    
}
