<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>ALL USERS DETAILS</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
            <tr>
              <th scope="row">{{$user->UserId}}</th>
              <td>{{$user->UserName}}</td>
              <td>{{$user->UserEmail}}</td>
              <td>{{$user->UserCity}}</td>
              <td>{{$user->UserAddress}}</td>
              <td>{{$user->UserContact}}</td>
              <td>{{$user->UserAge}}</td>
              <td>{{$user->UserGender}}</td>
              <td>{{$user->created_at}}</td>
              <td>{{$user->updated_at}}</td>
              <td><button class="btn btn-primary"><a style="text-decoration: none; color:white;" href="{{route('specific',$user->UserId)}}">View</a></button></td>
            </tr>
            @endforeach
                
         
        </tbody>
      </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>