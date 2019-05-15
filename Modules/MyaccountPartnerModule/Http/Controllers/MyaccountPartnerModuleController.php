<?php

namespace Modules\MyaccountPartnerModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AuthModules\Http\Middleware\Doi;
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
                $data['vendor'] = DB::table('user_vendor as a')
                                 ->join('bussiness_type as b', 'b.id', '=', 'a.bussiness_type_id')
                                 ->where('a.id',  Doi::info()->id)->first([
                                    'a.id as id',
                                    'a.id as id',
                                 ]);

                return view('myaccountpartnermodule::pages.identitas', $data);
                break;
            
            case 'izin':
                return view('myaccountpartnermodule::pages.izin');
                break;
            
            case 'akta':
                return view('myaccountpartnermodule::pages.akta');
                break;
            
            case 'pengurus':
                return view('myaccountpartnermodule::pages.pengurus');
                break;
            
            case 'tenaga-ahli':
                return view('myaccountpartnermodule::pages.tenaga-ahli');
                break;
            
            case 'akta':
                return view('myaccountpartnermodule::pages.akta');
                break;
            
            default:
                return "<section class='py-8 text-center'>
                          <h5 class'm-0'=>///////////////////</h5>
                          <h1 class=>() -______- ()</h1>
                          <h5 class=>page not found</h5>
                        </section>";
                break;
        }
    }

}
