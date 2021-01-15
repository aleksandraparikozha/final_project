@extends('layout')
@section('content')
    <h1><center>Welcome to the shop!</center></h1>
@foreach($products as $product)
    <div class="card">
        <h2>{{$product->name}}</h2>

<h3>{{$product->description}}</h3>
        <p class="price">Price: {{$product->price}}</p>
   <a href="{{route('products.edit', $product->id)}}">Edit</a>
    <form method="post" action="{{route('products.delete', $product->id)}}">
        @csrf
        @method('DELETE')
        <button type='submit' >Delete</button>
    </form>
</div>
    <br>
@endforeach

@endsection

