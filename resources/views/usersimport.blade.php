@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{-- __('Dashboard') --}} Tech.Admin. Users Import</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('You are logged in!') }}
                        </div>
                    @endif

                    {{-- __('You are logged in!') --}}

                    <a class="" href="/usersimport">Обновить страницу</a>
                </div>
            </div>
<hr>
            <div class="mb-3">
                <form action="{{ route('importUsers') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="formFile" class="form-label">Выбрать и загрузить файл по importUsers (ToModel)</label>
                <input class="form-control" type="file" name="file" id="formFile">
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Загрузить файл
                </button>
                </form>
            </div>
<hr>
            <div class="mb-3">
                <form action="{{ route('importUsersCollect') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="formFile" class="form-label">Выбрать и загрузить файл по importUsersCollect (ToCollection)</label>
                <input class="form-control" type="file" name="file" id="formFile">
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Загрузить файл
                </button>
                </form>
            </div>
<hr>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif 

            @if (session('msg'))
                <div class="alert alert-warning" role="alert">
                    {{ session('msg') }}
                </div>
            @endif  

<hr>
            <div class="mb-3 text-muted">
                <p>Отобразить файл в виде:</p>
                <a class="text-muted" href="##">Таблица</a>
                &nbsp;&nbsp;&nbsp;
                <a class="text-muted" href="##">Витрина</a>
            </div>  

<hr>
            <div class="mb-3">
                <a class="text-muted" href="/techadmin">Tech.Admin Menu</a>
            </div> 

        </div>
    </div>
</div>
@endsection