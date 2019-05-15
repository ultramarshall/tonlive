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
    	$id = $request->segment(3);
    	$data = [
    		'tender' => Eprocs::tender_detail($id)[0]
    	];
        return view('eporcmodule::detailProc', $data);
    }

    
}
