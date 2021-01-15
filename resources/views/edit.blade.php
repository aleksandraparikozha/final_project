@extends('layout')
@section('content')

    <body>

    <form method='post' action="{{route('products.update', $product)}}"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="container">
            <h1>Edit product</h1>
            <hr>

            <label><b>New name</b></label>

            <input type="text" placeholder="Enter name" name="name" value="{{old('name', $product->name)}}">

            <label><b>New code</b></label>
            <input type="text" placeholder="Enter code" name="code"  value="{{old('code', $product->code)}}">

            <label><b>New description</b></label>
            <input type="text" placeholder="Enter description" name="description" value="{{old('description', $product->description)}}">

            <label><b>New price</b></label>
            <input type="text" placeholder="Enter price" name="price" value="{{old('price', $product->price)}}">
            <hr>
            <hr>
            <button type="submit" class="submit">Submit</button>

        </div>


    </form>

    </body>


@endsection
