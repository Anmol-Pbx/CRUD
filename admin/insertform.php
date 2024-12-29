<?php
session_start();
if(isset($_SESSION['id']))
{
    echo"";
}
else
{
    header("location:adminlogin.php");
}
 
?>
<?php
@include('./index.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 28px;
        font-weight: bold;
        color: #343a40;
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .form-label {
        font-weight: bold;
        color: #495057;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #ced4da;
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        background-color: #007bff;
        border: none;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .container-fluif {
        padding: 0;
    }
</style>

</head>

<body>
  <div class="container-fluif">
    
    <div class="container" style="width:40%;">

      <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <h1>ADD NEW STUDENT</h1>
        <a href="./admincomands.php" style="display: flex; justify-content:end">back</a>
        
        <div class="mb-3">
          <label for="fname" class="form-label">Father name</label>
          <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="mb-3">
          <label for="mname" class="form-label">mother name</label>
          <input type="text" class="form-control" id="mname" name="mname">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">your name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">password</label>
          <input type="password" class="form-control" id="name" name="pass">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Add file</label>
          <input type="file" class="form-control" id="name" name="image">
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>