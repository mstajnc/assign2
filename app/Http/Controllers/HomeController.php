<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Court;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courts = Court::all()->count();
        $available_courts = Court::where('under_construction', 0)->count();
        $construction = Court::where('under_construction', 1)->count();
        $data = array (
            'courts' => $courts,
            'available_courts' => $available_courts,
            'construction' => $construction
            );

        return view('home', $data);
    }
}
