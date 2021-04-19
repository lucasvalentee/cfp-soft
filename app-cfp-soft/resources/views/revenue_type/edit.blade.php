@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Alter Revenue Type</h1>

        <form action="{{route('revenue_type.update', ['revenue_type' => $oRevenueType->revid])}}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="revdescription" class="form-control" value="{{$oRevenueType->revdescription}}">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Alter</button>
            </div>

        </form>

    </div>

@endsection
