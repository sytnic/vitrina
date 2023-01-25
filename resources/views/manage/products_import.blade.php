@extends('layouts.app_dashboard')

@section('content')

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            
            </div>            
        </div>
    </div>

    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                
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

            </div>
        </div>
    </div>

  </main>

@endsection
