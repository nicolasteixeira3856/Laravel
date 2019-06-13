@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <passport-client></passport-client>
                    <passport-authorizend-clients></passport-authorizend-clients>
                    <passport-personal-acess-tokens></passport-personal-acess-tokens>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
