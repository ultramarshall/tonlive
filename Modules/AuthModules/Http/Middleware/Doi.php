<?php

namespace Modules\AuthModules\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Crypt;
class Doi
{

    public function handle(Request $request, Closure $next)
    {

        // /* middleware check group user */
        if(self::info() == null)
            return redirect('auth/login');
        else
            return $next($request);

    }


    static function info($type='') {
        if ($type == '') {
            return session('authentication_user');
        }
        return session()->get('authentication_user')->$type;
    }

    static function login($email, $password) {

        $user = DB::table('user_vendor')->where('email' , $email)->first();
        if( Crypt::decryptString($user->password) == $password ) {
            session(['authentication_user' => $user]);
            return TRUE;
        } else {
            return FALSE;
        }

                
    }

    static function logout() {
        session()->forget('authentication_user');
        return true;
    }

    static function authenticated() {
        if (self::info() == null ) {
            return false;
        } else {
            return true;
        }
    }

    static function forgot($email) {
        $user = DB::table('user_vendor')->where('email' , $email)->first();
        return $user;
    }

   
}
