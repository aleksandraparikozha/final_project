@extends('layout')

@section('content')
    <center>
<h1>{{$category->name}}</h1>

<h2>{{$category->description}}</h2></center>
<h2>
@foreach($category->products as $product)
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

@endforeach
</h2>
@endsection
