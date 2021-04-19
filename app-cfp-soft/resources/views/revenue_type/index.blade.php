@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{route('revenue_type.create')}}" class="btn btn-lg btn-success">Create Type Revenue</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th class="col-lg">Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($oRevenueTypes as $oRevenueType)
                <tr>
                    <td>{{$oRevenueType->revid}}</td>
                    <td>{{$oRevenueType->revdescription}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('revenue_type.edit', array('revenue_type'=>$oRevenueType->revid))}}" class="btn btn-sm btn-primary">Alter</a>
                            <form action="{{route('revenue_type.destroy', array('revenue_type'=>$oRevenueType->revid))}}" method="POST">
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
