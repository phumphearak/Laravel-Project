@extends('layout.layout') 
@section('content') 
    <link href="{{asset('css/table.css')}}" rel="stylesheet"> 
    <h2>laravel Product - CRUD</h2> 
    <table class="table table-bordered"> 
        <tr> 
            <th>No</th> 
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
         </tr>
          @foreach ($products as $product) 
          <tr> 
            <td>{{ $product->id }}</td>
             <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td> 
                <form action="{{ route('products.destroy',$product->id) }}" method="POST"> 
                    <a class="button button5" href="{{ route('products.show',$product->id) }}">Show</a> 
                    <a class="button button2" href="{{ route('products.edit',$product->id) }}">Edit</a> 
                    @csrf @method('DELETE') 
                    <button type="submit" class="button button3" onclick="return confirm('Sure?')">Delete</button>
                 </form>
            </td> 
        </tr> 
        @endforeach 
    </table>
     <a class="button" href="{{ route('products.create') }}"> Create New Product</a>
 @endsection