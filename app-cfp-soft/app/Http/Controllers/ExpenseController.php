<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpensiveType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{

    private $expense;

    public function __construct(Expense $oExpense)
    {
        $this->expense = $oExpense;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oExpenses = $this->expense->paginate(10);

        return view('expense.index', compact('oExpenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $oExpenseTypes = ExpensiveType::all(['extid', 'extdescription']);

        return view('expense.create', compact('oExpenseTypes'));
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

        DB::table('expense')->insert([
           'extid' => $oData['extid'],
           'expdate' => $oData['expdate'],
           'expvalue' => $oData['expvalue']
        ]);

        return redirect()->route('expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oExpense = $this->expense->findOrFail($id);
        $oExpenseType = ExpensiveType::find($oExpense->extid);
        return view('expense.edit', compact(['oExpense', 'oExpenseType']));
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

        $oExpense = $this->expense->find($id);
        $oExpense->update($oData);

        return redirect()->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oExpense = $this->expense->find($id);
        $oExpense->delete();

        return redirect()->route('expense.index');
    }
}
