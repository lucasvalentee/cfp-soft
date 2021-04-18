@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{route('expensive_type.create')}}" class="btn btn-lg btn-success">Create Type Expense</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th class="col-lg">Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($oExtensiveTypes as $oExtensiveType)
                <tr>
                    <td>{{$oExtensiveType->extid}}</td>
                    <td>{{$oExtensiveType->extdescription}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('expensive_type.edit', array('expensive_type'=>$oExtensiveType->extid))}}" class="btn btn-sm btn-primary">Alter</a>
                            <form action="{{route('expensive_type.destroy', array('expensive_type'=>$oExtensiveType->extid))}}" method="POST">
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
