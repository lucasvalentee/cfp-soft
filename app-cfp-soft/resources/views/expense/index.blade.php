@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{route('expense.create')}}" class="btn btn-lg btn-success">Create Type Expense</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Expense Type</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($oExpenses as $oExpense)
                <tr>
                    <td>{{$oExpense->expid}}</td>
                    <td>{{$oExpense->expdate}}</td>
                    <td>{{$oExpense->extid}}</td>
                    <td>{{$oExpense->expvalue}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('expense.edit', array('expense'=>$oExpense->expid))}}" class="btn btn-sm btn-primary">Alter</a>
                            <form action="{{route('expense.destroy', array('expense'=>$oExpense->expid))}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Destroy</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
