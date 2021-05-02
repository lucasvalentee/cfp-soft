@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Alter Expense</h1>

        <form action="{{route('expense.update', ['expense' => $oExpense->expid])}}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="expdate" class="form-control" value="{{$oExpense->expdate}}" disabled>
            </div>

            <div class="form-group">
                <label>Expense Type</label>
                <select name="extid" class="form-control" disabled>
                    <option value="{{$oExpenseType->extid}}">{{$oExpenseType->extdescription}}</option>
                </select>
            </div>

            <div class="form-group">
                <label>Value</label>
                <input type="number" name="expvalue" class="form-control" step="0.01" value="{{$oExpense->expvalue}}">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Alter</button>
            </div>

        </form>

    </div>

@endsection
