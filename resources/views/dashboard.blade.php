<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .dashboard-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="dashboard-container">
      <h2 class="text-center mb-4">Dashboard</h2>
      <div class="user-info">
        <p><strong>User Info: </strong>{{Auth::id()}}</p>
        <p><strong>Username:</strong> {{Auth::user()->name}}</p>
        <p><strong>Email:</strong> {{Auth::user()->email}}</p>
        <!-- You can add more user information here -->
      </div>
      <div class="text-center mt-4">
        <a href="{{route('logout')}}"><button class="btn btn-danger">Logout</button></a>
      </div>
    </div>
  </div>

  
</body>
</html>
