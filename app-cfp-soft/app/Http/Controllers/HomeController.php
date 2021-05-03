<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sBgColor = '';
        $sTextColor = 'text-dark';
        $iRevenue = DB::table('revenue')->select(DB::raw('sum(renvalue)'))->get()[0]->sum;
        $iExpense = DB::table('expense')->select(DB::raw('sum(expvalue)'))->get()[0]->sum ? : 0;

        $iTotal = $iRevenue - $iExpense;

        if ($iTotal < 0) {
            $sBgColor = 'bg-danger';
            $sTextColor = 'text-light';
        } elseif($iTotal > 0) {
            $sBgColor = 'bg-success';
            $sTextColor = 'text-light';
        }

        return view('home', compact(['iRevenue', 'iExpense', 'iTotal', 'sBgColor', 'sTextColor']));
    }
}
