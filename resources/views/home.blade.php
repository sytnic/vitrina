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
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
<br>
            <div class="mb-3">
                <form action="##route('importPayments')" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="formFile" class="form-label">Выбрать и загрузить файл</label>
                <input class="form-control" type="file" id="formFile">
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Загрузить файл
                </button>
                </form>
            </div>

            @if (session('msg'))
                <div class="alert alert-warning" role="alert">
                    {{ session('msg') }}
                </div>
            @endif      

        </div>
    </div>
</div>
@endsection
