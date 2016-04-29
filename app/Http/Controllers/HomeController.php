<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Court;
use Khill\Lavacharts\Lavacharts;

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
        $court_stats = array ( //array containing data for the text report
            'courts' => $courts,
            'available_courts' => $available_courts,
            'construction' => $construction
            );

        /* CHART SETUP */
        $court_chart = \Lava::DataTable(); //create the chart
        $court_chart->addStringColumn('Courts') //data for the chart
                    ->addNumberColumn('Percent')
                    ->addRow(['Courts available', $available_courts])
                    ->addRow(['Courts under construction', $construction]);
        \Lava::PieChart('Courts', $court_chart, ['title' => 'Courts availability']); //chart's extra details

        return view('home', compact($court_chart), $court_stats);
    }
}
