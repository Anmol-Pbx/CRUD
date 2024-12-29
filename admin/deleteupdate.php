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
@include("../connection.php");
@include("./index.php");
?>
<a href="./admincomands.php" style="font-size:25px; text-decoration:none; color:black; display:flex;
justify-content:center; align-items:center;">back</a>
<?php
$a = "SELECT name,fname,mname,id,pass,image FROM addstudent";
$result = mysqli_query($conn, $a);
if (mysqli_num_rows($result) > 0) {
    echo "<style>
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        text-align: left;
        font-family: Arial, sans-serif;
    }
    table th, table td {
        padding: 10px;
        border: 1px solid #ccc;
    }
    table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    table tr:hover {
        background-color: #f1f1f1;
    }
    table td a {
        margin-right: 10px;
        text-decoration: none;
        color:rgb(3, 3, 3);
        font-weight: bold;
    }
    table td a:hover {
        text-decoration: underline;
    }
    </style>";
    echo "<table>
    <tr>
        <th>Your Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>ID</th>
        <th>pass</th>
        <th>Image</th>
        <th>Action</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>" . htmlspecialchars($row['name']) . "</td>
            <td>" . htmlspecialchars($row['fname']) . "</td>
            <td>" . htmlspecialchars($row['mname']) . "</td>
            <td>" . htmlspecialchars($row['id']) . "</td>
            <td>" . htmlspecialchars($row['pass']) . "</td>
            <td><img src='../imagedata/" . $row['image'] . "' width='200' height='100'></td>
            <td>
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                <a href='updateform.php?id=" . $row['id'] . "'>Update</a>
            </td>
        </tr>";
    }
    echo "</table>";
}
?>
