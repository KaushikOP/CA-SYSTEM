<?php
    require_once "connect.php";

    $sql="select userId from user where userId = '".$_POST['username']."' and password = '".md5($_POST['password'])."'";
    $result=mysqli_query($con,$sql) or die($con->error);

    if($result->num_rows==1){
        echo "<script>
        alert('Logged in');        
        window.location = './fill.html';
            </script>";
    }
?>