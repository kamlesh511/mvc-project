<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel Crud </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expend-sm bg-dark ">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link text-light">products</a>
            </li>
        </ul>
    </nav> 
    @if($massage =Session::get('success'))
    <div class="alert alert-success alert-block" >
        <strong>{{$massage}}</strong>
    </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
              <p>Name: <b>{{$product->name}}</b></p>
              <p>Description : <b>{{$product->description}}</b></p>
              <img src="/products/{{$product->image}}" class="rounded" width="100%" />
            </div>
        </div>
    </div>
</div>