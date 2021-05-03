@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card mt-1 bg-success" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-light">Revenue</h5>
                            <p class="card-text text-light">{{$iRevenue}}</p>
                        </div>
                    </div>

                    <div class="card mt-1 bg-danger" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-light">Expense</h5>
                            <p class="card-text text-light">{{$iExpense}}</p>
                        </div>
                    </div>

                    <div class="card mt-2 {{$sBgColor}}" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title {{$sTextColor}}">Total</h5>
                            <p class="card-text {{$sTextColor}}">{{$iTotal}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
