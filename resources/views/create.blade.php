@extends('layout')
@section('content')


    <div>
        {{--    @if($errors->any())--}}
        {{--        @foreach($errors->all() as $error)--}}
        {{--            <li>{{$error}}</li>--}}
        {{--        @endforeach--}}
        {{--        @endif--}}
        <form method='post' action="{{route('products.save')}}"  enctype="multipart/form-data" >

            <div class="container">
                <h1>Add product</h1>
                <hr>

                <label><b>Enter title</b></label>

                <input type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Enter name of product" name="name" >
                {{--        @if($errors->first('title'))--}}
                {{--            <p class="text-danger">{{$errors->first('title')}}</p>--}}
                {{--        @endif--}}
                @error('name')
                <p class="text-danger">{{$errors->first('name')}}</p>

                @enderror
                <hr>
                <label><b>Enter category's id</b></label>
                <input type="text" class="form-control {{$errors->has('category_id') ? 'is-invalid': ''}} " placeholder="Enter category's id (mobiles-1, monitors-2, keyboards-3)" name="category_id"  >
                @if($errors->first('category_id'))
                    <p class="text-danger">{{$errors->first('category_id')}}</p>
                @endif
                <hr>
                <label><b>Enter description</b></label>
                <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid': ''}} " placeholder="Enter description" name="description" >
                @if($errors->first('description'))
                    <p class="text-danger">{{$errors->first('description')}}</p>
                @endif
                <hr>
                <label><b>Enter code</b></label>
                <input type="text" class="form-control {{$errors->has('code') ? 'is-invalid': ''}} " placeholder="Enter code" name="code" >
                @if($errors->first('code'))
                    <p class="text-danger">{{$errors->first('code')}}</p>
                @endif
                <hr>
                <label><b>Enter price</b></label>
                <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid': ''}} " placeholder="Enter price" name="price" >
                @if($errors->first('price'))
                    <p class="text-danger">{{$errors->first('price')}}</p>
                @endif
                <hr>
                @csrf
                <button type="submit" class="submit">Submit</button>
            </div>




        </form>





</div>
@endsection
