<?php
@include("../connection.php");

    $id = $_GET['id'];
    $a = "DELETE FROM addstudent WHERE id='$id'";
    
    if (mysqli_query($conn, $a)) {
        
        ?> <script>
            alert("R YOU SHURE U WANT TO DELETE THIS..................");
            window.open('deleteupdate.php', '_self');
        </script>
        <?php
    } else {
        echo "DATA NOT DELETED...............";
    }
?>