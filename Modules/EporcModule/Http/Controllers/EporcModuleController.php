<?php

namespace Modules\EporcModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Eprocs;

class EporcModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data = [
            'classifications' => Eprocs::classifications(),
            'tender' => Eprocs::tender()
        ];
        return view('eporcmodule::index', $data);
    }
    public function participant(Request $request)
    {
        $id = $request->segment('3');
        $data  = [
            'tender' => Eprocs::tender_detail($id) 
        ];
        return view('eporcmodule::participant');
    }

    
}
