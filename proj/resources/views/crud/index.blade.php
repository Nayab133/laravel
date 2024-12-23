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
    <div class="container mt-3">
        <div class="alert alert-info">
            <h1 class="text-center">CRUD FORM</h1>
        </div>
        <form action="store" method="post">
            @csrf
            <input type="text" class="form-control mb-3" name="name">
            <input type="email" class="form-control mb-3" name="email">
            @if (session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
              @endif 
            <input type="submit" class="btn btn-info mt-3">

        </form>
        
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>