@extends('layouts.app_dashboard')

@section('content')  

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

@endsection
