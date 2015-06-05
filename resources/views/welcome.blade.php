@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Wellcome to myfinanc.es</h1>
            <p>{{ Inspiring::quote() }}</p>
            <p><a class="btn btn-primary btn-lg" href="{{ url('/auth/register') }}" role="button">Register</a></p>
        </div>
    </div>
@endsection


