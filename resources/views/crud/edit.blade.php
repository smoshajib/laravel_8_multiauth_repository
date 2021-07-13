<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Edit Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    </head>
    <body>
                <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">CRUD Student</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{URL::to('/crud')}}">Add Student<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('crud.index')}}">View Student</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
              <div class="container-fluid jumbotron">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
             <form action="{{route('crud.update',$crud)}}" method="post">
                @csrf
                 @method('PUT')
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                        <input type="text" class="form-control" value="{{$crud->name}}" name="name" placeholder="Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="email" value="{{$crud->email}}" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="phone" value="{{$crud->phone}}" placeholder="Phone">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="submit" class="form-control" >
                    </div>
                    <div class="col">

                    </div>
                </div>
            </form>

        </div>
        
    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    </body>
</html>
