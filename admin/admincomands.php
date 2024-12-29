<?php
session_start();
if(isset($_SESSION['id']))
{
    echo "";
}
else
{
    header("location:adminlogin.php");
}
@include("./index.php");
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
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 50px;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        font-size: 28px;
        color: #343a40;
        text-align: center;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
        margin-top: 50px;
    }

    td {
        padding: 15px;
    }

    a {
        font-size: 18px;
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    a:hover {
        text-decoration: underline;
        color: #0056b3;
    }

    td a h3 {
        margin: 0;
        font-size: 20px;
        color: #343a40;
        text-transform: uppercase;
    }

    td a h3:hover {
        color: #0056b3;
    }

    .container-fluid {
        padding: 0;
    }
</style>

</head>
<body>
<div class="container-fluid">
        <div class="container">
            
            <div><h1 style="display: flex; justify-content :center;">WELCOME TO ADMIN DASHBORD</h1></div>
            <div>
            
                <table align="center" style="margin-top: 100px;">
                    <tr>
                        <td>
                            <a href="./insertform.php"style="text-decoration: none;" ><h3>INSERT NEW STUDENTS</h3></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="./deleteupdate.php" style="text-decoration: none;"><h3>UPDATE AND DELETE STUDENTS</h3></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>    
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>