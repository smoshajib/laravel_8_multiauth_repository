<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Add Student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <br>
        <br>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('crud.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" placeholder="Name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <input type="email" name="email" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <input type="number" name="phone" placeholder="Phone">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <input type="text" name="image" >
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <input type="submit"><br><br>
        </form>

    </body>
</html>
