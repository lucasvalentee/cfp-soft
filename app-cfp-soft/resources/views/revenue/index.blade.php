@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{route('revenue.create')}}" class="btn btn-lg btn-success">Create Revenue</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Revenue Type</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($oRevenues as $oRevenue)
                <tr>
                    <td>{{$oRevenue->renid}}</td>
                    <td>{{$oRevenue->rendate}}</td>
                    <td>{{$oRevenue->revid}}</td>
                    <td>{{$oRevenue->renvalue}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('revenue.edit', array('revenue'=>$oRevenue->renid))}}" class="btn btn-sm btn-primary">Alter</a>
                            <form action="{{route('revenue.destroy', array('revenue'=>$oRevenue->renid))}}" method="POST">
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
