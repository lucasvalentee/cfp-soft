<?php

namespace App\Http\Controllers;

use App\Models\ExpensiveType;
use Illuminate\Http\Request;

class ExpensiveTypeController extends Controller
{
    private $expensiveType;

    public function __construct(ExpensiveType $expensiveType)
    {
        $this->expensiveType = $expensiveType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oExtensiveTypes = $this->expensiveType->paginate(10);

        return view('expensive_type.index', compact('oExtensiveTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expensive_type.create');
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

        $this->expensiveType->create($oData);

        return redirect()->route('expensive_type.index');
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
        $oExpensiveType = $this->expensiveType->findOrFail($id);

        return view('expensive_type.edit', compact('oExpensiveType'));
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

        $oExpensiveType = $this->expensiveType->find($id);
        $oExpensiveType->update($oData);

        return redirect()->route('expensive_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oExpensiveType = $this->expensiveType->find($id);
        $oExpensiveType->delete();

        return redirect()->route('expensive_type.index');
    }
}
