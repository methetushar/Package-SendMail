<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://o.remove.bg/downloads/d6ac1503-aa0e-494c-9589-b0cb7287226a/image-removebg-preview.png" type="image/gif" sizes="16x16">
    <title>Package | Development</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .bg-light {
            background-color: #0b1518ad!important;
        }
        .btn-primary {
            color: #fff;
            background-color: #0d2b4b;
            border-color: #072443;
            border-radius: 50px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="col-md-5 m-auto">
            <div class="card border-0 rounded-0 shadow-lg" >
                <div class="card-header border-0">
                    <h3 class="text-center">Mail Sender Bot</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
{{--                            @error('name')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" >
                            <small id="email" class="form-text text-muted">Enter valid mail to send  mail</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="radio" name="save_to_db" class="form-check-input" value="1" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I want to save details into database!</label>
                        </div>
                        <button type="submit" class="btn btn-primary col-md-6 text-center">Submit</button>
                        <span class="text-success">
                            @if(session('message'))
                                {{ session('message')  }}
                            @endif
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

