<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use App\Models\RevenueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{

    private $revenue;

    public function __construct(Revenue $oRevenue)
    {
        $this->revenue = $oRevenue;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oRevenues = $this->revenue->paginate(10);

        return view('revenue.index', compact('oRevenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oRevenueTypes = RevenueType::all(['revid', 'revdescription']);
        return view('revenue.create', compact('oRevenueTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oData = $request->all();

        DB::table('revenue')->insert([
            'revid' => $oData['revid'],
            'rendate' => $oData['rendate'],
            'renvalue' => $oData['renvalue']
        ]);

        return redirect()->route('revenue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oRevenue = $this->revenue->findOrFail($id);
        $oRevenueType = RevenueType::find($oRevenue->revid);
        return view('revenue.edit', compact(['oRevenue', 'oRevenueType']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oData = $request->all();

        $oRevenue = $this->revenue->find($id);
        $oRevenue->update($oData);

        return redirect()->route('revenue.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oRevenue = $this->revenue->find($id);
        $oRevenue->delete();

        return redirect()->route('revenue.index');
    }
}
