<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Image Gallery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1> Image Upload</h1>
            @if (count($errors) > 0)
        <div class="alert alert-danger">
            Error occured.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Primary Image:</h3>
                <img src="/images/{{ Session::get('fileName') }}" />
            </div>
            <div class="col-md-4">
                <h3>Thumbnail:</h3>
                <img src="/thumbnails/{{ Session::get('fileName') }}" />
            </div>
        </div>
        @endif
        
            <form action="{{URL::to('/save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <input type="submit">
            </form>
            
        </div>
    </body>
</html>
