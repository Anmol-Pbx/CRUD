<?php
@include("../connection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM addstudent WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
}
   else{
    echo "DATA NOT FOUND...............";
}
if(isset($_POST['submit'])){
    $name = ($_POST['name']);
    $fname = ($_POST['fname']);
    $mname = ($_POST['mname']);
    $sql = "UPDATE addstudent SET name='$name', fname='$fname', mname='$mname' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        ?> <script>
            alert("DATA UPDATED SUCCESSFULLY..................");
            window.open('deleteupdate.php', '_self');
            
        </script>
        <?php
    } else {
        echo "DATA NOT UPDATED...............";
    }
}
?>