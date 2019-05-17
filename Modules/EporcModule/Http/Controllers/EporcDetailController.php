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
                $data = ['tender' => Eprocs::tender_detail($id)[0]];
                return view('eporcmodule::pages.perencanaan', $data);
                break;
            case 'peserta':
                $data = ['peserta' => Eprocs::peserta_tender($id)];
                return view('eporcmodule::pages.peserta', $data);
                break;
            case 'diskusi':
                $data = ['diskusi' => Eprocs::get_discuss($id)];
                return view('eporcmodule::pages.diskusi', $data);
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
