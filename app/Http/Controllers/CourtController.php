<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Court;


class CourtController extends Controller
{
    public function index(){
		$courts = Court::all();
		return view('courts.index',['panel_heading' => 'List of courts'], compact('courts'));
    }


    public function show(Court $court){


    	return view('courts.show',['panel_heading' => 'Court details'], compact('court'));
    }

     public function update(Request $request, Court $court){
    	
    	$court->update($request->all());
    	return back();
    }
}
