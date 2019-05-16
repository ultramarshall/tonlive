<?php

namespace Modules\EporcModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Eprocs;

class EporcDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
    	
        return view('eporcmodule::detailProc');
    }


    public function get_pages(Request $request){
        $id = $request->id;
        switch ($request->pages) {

            case 'perencanaan':
                $data = [
                    'tender' => Eprocs::tender_detail($id)[0]
                ];
                return view('eporcmodule::pages.perencanaan', $data);
                break;
            case 'peserta':
                return view('eporcmodule::pages.peserta');
                break;
            case 'diskusi':
                return view('eporcmodule::pages.diskusi');
                break;
            case 'jadwal':
                return view('eporcmodule::pages.jadwal');
                break;
            
     
            default:
                return "<section class='py-8 text-center'>
                          <h1 class=>404</h1>
                          <h5 class=>page not found</h5>
                        </section>";
                break;
        }
    }

    
}
