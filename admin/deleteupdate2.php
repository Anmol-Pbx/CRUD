<?php
@include("../connection.php");
$a = "SELECT name,fname,mname,id FROM addstudent";
$result = mysqli_query($conn, $a);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
    
    <td> your_name</td>
    <td> father_name</td>
    <td> mother name</td>
    <td> ID </td>
    <td> action </td>
    
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['fname'] . "</td>
        <td>" . $row['mname'] . "</td>
        <td>" . $row['id'] . "</td>
        <td><a href='delete.php?id=" . $row['id'] . "'>delete</a> <a href='updateform.php?id=" . $row['id'] . "'>update</a>
        </td>
        
        </tr> ";
    }
    echo "</table>";
}
