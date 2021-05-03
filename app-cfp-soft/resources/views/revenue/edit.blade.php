@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Alter Expense</h1>

        <form action="{{route('revenue.update', ['revenue' => $oRevenue->renid])}}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="rendate" class="form-control" value="{{$oRevenue->rendate}}" disabled>
            </div>

            <div class="form-group">
                <label>Expense Type</label>
                <select name="revid" class="form-control" disabled>
                    <option value="{{$oRevenueType->revid}}">{{$oRevenueType->revdescription}}</option>
                </select>
            </div>

            <div class="form-group">
                <label>Value</label>
                <input type="number" name="renvalue" class="form-control" step="0.01" value="{{$oRevenue->renvalue}}">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Alter</button>
            </div>

        </form>

    </div>

@endsection
