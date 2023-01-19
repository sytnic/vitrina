@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">firma</th>
                <th scope="col">code</th>
                <th scope="col">kolvo</th>
                <th scope="col">tsena</th>

                <th scope="col">group</th>
                <th scope="col">prodano</th>
                <th scope="col">vputi</th>
                <th scope="col">zakup</th>

                <th scope="col">datetime</th>
                <th scope="col">tochka</th>

                <th class="">Actions</th>
                </tr>
            </thead>
            <tbody>
<!--
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>View Edit Delete</td>
                </tr>

                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>View Edit Delete</td>
                </tr>
-->
        {{-- @forelse это цикл наподобие foreach, придуманный в Laravel;
             помогает легко отреагировать на пустой массив при помощи @empty в конце цикла
        --}}
        {{-- $products - переданная переменная из ProductController@table --}}
        @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->firma }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->kolvo }}</td>
                <td>{{ $product->tsena }}</td>

                <td>{{ $product->group }}</td>
                <td>{{ $product->prodano }}</td>
                <td>{{ $product->vputi }}</td>
                <td>{{ $product->zakup }}</td>

                <td>{{ date('d F Y', strtotime($product->datetime)) }}</td>
                <td>{{ $product->tochka }}</td>

                <td class="">
                    <a  href="##{{-- action('BookingController@show', ['booking' => $booking->id]) --}}"
                        class="text-muted"
                        alt="View"
                        title="View">
                      View</a>
                    <a  
                        href="##{{-- action('BookingController@edit', ['booking' => $booking->id]) --}}"
                        class="text-muted"
                        alt="Edit"
                        title="Edit">
                      Edit</a>
<!-- 
                   <form action="{{-- action('BookingController@destroy', ['booking' => $booking->id ]  ) --}}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button type="submit" class="btn btn-link" title="Delete" value="DELETE" >Delete</button>
                    </form>
--> 
                </td>
            </tr>
        @empty
        @endforelse
              
            </tbody>
        </table>    
        <!-- Pagination -->        
        {{ $products->links() }}
        </div>
    </div>
</div>
@endsection