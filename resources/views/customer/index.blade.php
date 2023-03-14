@include('partials.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <title>Customer</title>
</head>
<body>
<div class="alert alert-success" role="alert">
  @if(Session::has('success'))
  {{Session::get ('success')}}
  @endif
  </div>
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th></th>
      <th>
  </thead>

      </th>
    </tr>
  </thead>

 

  @foreach ($customers as $customer)

  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->contactNumber}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="#">Edit</a></td>
      <td><a href="delete/{{$customer->id}}" style="color:white"><button type="button" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
</table>
</body>
</html>
@include('partials.footer')