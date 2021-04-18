@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Alter Expense Type</h1>

        <form action="{{route('expensive_type.update', ['expensive_type' => $oExpensiveType->extid])}}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="extdescription" class="form-control" value="{{$oExpensiveType->extdescription}}">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Alter</button>
            </div>

        </form>

    </div>

@endsection
