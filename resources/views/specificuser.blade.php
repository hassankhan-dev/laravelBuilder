<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        p{
            margin: 0;
            margin-left: 30px;
        }
        h1{
            margin-top: 50px;
            margin-left: 30px;
        }
    </style>
  </head>
  <body>
    <h1>SPECIFIC USER DETAILS</h1>
    @if (count($data)==0)
       <h6 class="text-center mt-5">No Content Found</h6>
    @else
    @foreach ($data as $user)
    <p>Name : {{$user->UserName}}</p>
    <p>Email : {{$user->UserEmail}}</p>
    <p>City : {{$user->UserCity}}</p>
    <p>Address : {{$user->UserAddress}}</p>
    <p>Contact : {{$user->UserContact}}</p>
    <p>Age : {{$user->UserAge}}</p>
    <p>Gender : {{$user->UserGender}}</p>
    <p>CreatedAt : {{$user->created_at}}</p>
    <p>UpdatedAt : {{$user->updated_at}}</p>
    @endforeach
    @endif
    
   
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>