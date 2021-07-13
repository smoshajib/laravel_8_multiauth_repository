<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>View Crud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

        <script>
            function deleteMsg()
            {
                var msg = confirm('Are u Sure To Delete This')
                if (msg)
                {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
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
            @if(session()->get('msg'))
            <div class="alert alert-success text-center">
                
                {{session()->get('msg')}}
                {{session()->put('msg','')}}
                
            </div>
            @endif
            <form action="{{route('crud.store')}}" method="post" >
                @csrf
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                        <input type="text" class="form-control" name="name" placeholder="Name">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="phone" placeholder="Phone">
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


        <div class="container-fluid jumbotron" style="margin-top:-25px; ">
            <div class="row">

                <div class="col-2"></div>
                <div class="col-8 ">
                    <br>
                    <br>
                    <br>

                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="studentTable">

                            @forelse($data as $vdata)

                            <tr>
                                <th scope="row">{{$vdata->id}}</th>

                                <td>{{$vdata->name}}</td>
                                <td>{{$vdata->email}}</td>
                                <td>{{$vdata->phone}}</td>
                                <td>

                                    <a style="float:left;margin-right:1px; " href="{{route('crud.edit',$vdata)}}"><button class="btn btn-success" >Edit</button></a>

                                    <form action="{{route('crud.destroy',$vdata)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button style="float: left" type="submit"  class="btn btn-danger" onclick="return deleteMsg()">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">Empty Data</td>
                            </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    </body>
</html>
