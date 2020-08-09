<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <form action="/updateProcess" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}" />
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="exampleFormControlInput1" placeholder="farrel"
                value="{{$data->full_name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="Jl."
                value="{{$data->address}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="082213"
                value="{{$data->phone}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-dark">Update Data</button>
        </div>
    </form>
</body>
