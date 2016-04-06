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

}
