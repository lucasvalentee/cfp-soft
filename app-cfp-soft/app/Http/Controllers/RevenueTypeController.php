<?php

namespace App\Http\Controllers;

use App\Models\RevenueType;
use Illuminate\Http\Request;

class RevenueTypeController extends Controller
{

    private $revenueType;

    public function __construct(RevenueType $revenueType)
    {
        $this->revenueType = $revenueType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oRevenueTypes = $this->revenueType->paginate(10);

        return view('revenue_type.index', compact('oRevenueTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revenue_type.create');
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

        $this->revenueType->create($oData);

        return redirect()->route('revenue_type.index');
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
        $oRevenueType = $this->revenueType->findOrFail($id);

        return view('revenue_type.edit', compact('oRevenueType'));
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

        $oRevenueType = $this->revenueType->find($id);
        $oRevenueType->update($oData);

        return redirect()->route('revenue_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oRevenueType = $this->revenueType->find($id);
        $oRevenueType->delete();

        return redirect()->route('revenue_type.index');
    }
}
