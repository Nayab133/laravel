<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="alert alert-info" role="alert">
            <h1 class="text-center">CRUD FORM</h1>
        </div>
        <form action="store" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="">Email</label>
            <input type="email" class="form-control mb-3" name="email">
            <input type="submit" class="btn btn-info mb-3">
            <a href="show" class="btn btn-info">View record</a>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-info">
        {{session('success')}}
    </div>
    @endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>