@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Create Revenue</h1>

        <form action="{{route('revenue.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="rendate" class="form-control">
            </div>

            <div class="form-group">
                <label>Revenue Type</label>
                <select name="revid" class="form-control">
                    @foreach($oRevenueTypes as $oRevenueType)
                        <option value="{{$oRevenueType->revid}}">{{$oRevenueType->revdescription}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Value</label>
                <input type="number" name="renvalue" class="form-control" step="0.01">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Create</button>
            </div>

        </form>

    </div>

@endsection
