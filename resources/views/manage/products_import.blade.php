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

                    {{-- __('You are logged in!') --}}

                    <a class="" href="/products/import">Обновить страницу</a>
                </div>
            </div>
<br>
        <h3>Products Import</h3>
            <div class="mb-3">
                <form action="/productsimport" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="formFile" class="form-label">Выбрать и загрузить файл</label>
                <input class="form-control" type="file" name="file" id="formFile">
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Загрузить файл
                </button>
                </form>
            </div>

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

<br>
            <div class="mb-3">
                <p>Отобразить файл в виде:</p>
                <a class="" href="##">Таблица</a>
                &nbsp;&nbsp;&nbsp;
                <a class="" href="##">Витрина</a>
            </div>  

            <hr>
            <div class="mb-3">
                <a class="text-muted" href="##/techadmin">Tech.Admin Menu</a>
            </div> 

        </div>
    </div>
</div>
@endsection