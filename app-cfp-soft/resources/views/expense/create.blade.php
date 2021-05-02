@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Create Expense</h1>

        <form action="{{route('expense.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="expdate" class="form-control">
            </div>

            <div class="form-group">
                <label>Expense Type</label>
                <select name="extid" class="form-control">
                    @foreach($oExpenseTypes as $oExpenseType)
                        <option value="{{$oExpenseType->extid}}">{{$oExpenseType->extdescription}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Value</label>
                <input type="number" name="expvalue" class="form-control" step="0.01">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Create</button>
            </div>

        </form>

    </div>

@endsection
