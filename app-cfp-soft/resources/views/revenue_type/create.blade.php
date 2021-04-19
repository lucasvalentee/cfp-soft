@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Create Revenue Type</h1>

        <form action="{{route('revenue_type.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="revdescription" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Create</button>
            </div>

        </form>

    </div>

@endsection
