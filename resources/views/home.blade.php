@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('You are logged in!') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}                    
                </div>
            </div>
<br>
            <div class="mb-3">
                <h3>Manage Menu</h3>
                <a class="" href="/products/import">Products Import</a>
                <br>
            </div>  

            <hr>

        </div>
    </div>
</div>
@endsection
