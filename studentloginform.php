
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 50px;
        max-width: 500px;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        font-size: 24px;
        color: #343a40;
        text-align: center;
    }

    a h1 {
        font-size: 16px;
        color: #dc3545;
        text-decoration: none;
        font-weight: bold;
    }

    a h1:hover {
        text-decoration: underline;
    }

    .form-label {
        font-weight: bold;
        color: #495057;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #ced4da;
    }

    .form-check-label {
        color: #6c757d;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 6px;
        padding: 10px 15px;
        font-weight: bold;
        font-size: 14px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .welcome {
        margin-top: 100px;
        text-align: center;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .welcome1 {
        font-size: 28px;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    body::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, #007bff, #6c757d);
        z-index: -1;
    }

</style>

</head>
<body>

<form method="POST" action="">
  <div class=" welcome"><h1 class="welcome1">WELCOME STUDENT </h1></div>
    <div class="container-fluid">
        <div class="container">
            <div><h1 style="display: flex; justify-content :center;">STUDENT LOGIN PAGE</h1></div>
            <div><a href="./admin/adminlogin.php" style="display: flex; justify-content :end; text-decoration:none"><h1>ADMIN PAGE</h1></a></div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php
 session_start();
@include('./connection.php');
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $pass = md5($password);
  $sql="SELECT * FROM addstudent WHERE name='$username' AND pass='$pass'";
   $result=mysqli_query($conn,$sql);
   if($result){
    $row=mysqli_fetch_assoc($result);
    if($row && $pass==$row['pass'] && $username==$row['name'])
    {
      $_SESSION['id']=$row['id'];
      if($_SESSION['id']<1)
      {
        header('location:studentloginform.php');
        
      }
      else
      {
        header('location:showstutable.php');
      }
    }
  } 
}
?>