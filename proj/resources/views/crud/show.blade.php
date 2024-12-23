<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

    <div class="container-fluid mt-3">
        <div class="alert alert-info">
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
                @foreach($users as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->Name }}</td>
                    <td>{{ $data->Email}}</td>
                    <td>
                        <a href="{{route('edit',$data->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                         <form action="{{route('delete',$data->id)}}" method="post" style="display:inline">
                         @csrf
                         @method ('delete')
                         <button class="btn btn-danger">
                         <i class="fa-solid fa-trash"></i> 
                         </button>
                         </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>