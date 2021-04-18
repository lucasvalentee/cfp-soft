@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Create Expense Type</h1>

        <form action="{{route('expensive_type.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="extdescription" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-success">Create</button>
            </div>

        </form>

    </div>

@endsection
