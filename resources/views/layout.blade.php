<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgb(57, 112, 179);
            max-width: 500px;
            margin: auto;
            text-align: center;
            background-color: #4bbcee;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color:#b0e0e6;">
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">Home</a>
    <a class="navbar-brand" href="{{route('login')}}">Login</a>
    <a class="navbar-brand" href="{{route('register')}}">Sign up</a>
    <a class="navbar-brand" href="{{route('categories')}}">Categories</a>
    <a class="navbar-brand" href="{{route('products.create')}}">Create</a>
    <a class="navbar-brand" href="{{route('mails.create')}}">Send mail</a>
</nav>
@yield('content')
</body>
