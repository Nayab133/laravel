<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class="container-fluid mt-4">
        <div class="alert alert-info" role="alert">
            <h1 class="text-center">CRUD FORM</h1>
        </div>
        <table class="table table-info">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->Email}}</td>
                
                <td>
                    <a href="{{route('edit',$user->id)}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                    <form action="{{route('delete',$user->id)}}" method="post" style= "display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
                @endforeach
                </tr>
            </tbody>
        </table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
