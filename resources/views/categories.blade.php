@extends('layout')
<style>
    table {
        border-collapse: separate;
        border-spacing: 50px 0;
    }

    td {
        padding: 10px 0;
    }
</style>
@section('content')
   <center> <table><tr>
@foreach($categories as $category)
                <td style="border: 30px solid #b0e0e6;">
    <div class="card">
<a href='/products/{{$category->code}}'>
    <h3>{{$category->name}}</h3></a>
    <p>{{$category->description}}</p>
    </div></td>
@endforeach
</tr></table></center>
@endsection
