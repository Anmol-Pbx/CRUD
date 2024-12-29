<?php
@include('../connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['name']);
    $fname = ($_POST['fname']);
    $mname = ($_POST['mname']);
    $pass = ($_POST['pass']);
    $pass = md5($pass);
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imageName = $image['name']; // real name
        $imageTmpName = $image['tmp_name']; // fake name
    
        // my directry creation for store image
        $uploadDirectory = "../imagedata/";
        $newImageName = basename($imageName);
    
        // Move the image to the uploads folder
        if (move_uploaded_file($imageTmpName, $uploadDirectory . $newImageName)) {
    
            $imagepath = $newImageName;
        } else {
            echo "Error.................";
        }
    }
    $sql = "INSERT INTO addstudent (name, fname, mname,pass,image) VALUES ('$name','$fname','$mname','$pass','$imagepath')";

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
            alert("DATA INSERTED SUCCESSFULLY");
            window.open('./insertform.php', '_self');
        </script>
        <?php
    } else {
        echo "DATA NOT INSERTED...............";
    }
    mysqli_close($conn);
}
?>