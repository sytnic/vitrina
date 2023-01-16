@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{-- __('Dashboard') --}} Tech.Admin Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('You are logged in!') }}
                        </div>
                    @endif

                    {{-- __('You are logged in!') --}}
                </div>
            </div>
<br>
            <div class="mb-3">
                <p>Technical menu:</p>
                <a class="" href="/usersimport">Users-Import</a>
                <br>
                <a class="" href="##">Link</a>
            </div>  

            <hr>
            <div class="mb-3">
                <a class="text-muted" href="##">For Tech.Admin</a>
            </div> 

        </div>
    </div>
</div>
@endsection
