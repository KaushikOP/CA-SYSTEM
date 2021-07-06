<?php

    include 'connect.php';

    if(isset($_POST)){
        $id = $_POST['id'];
    }
    $query = "update payment_details set ";
    $result = mysqli_query($con,$query);

    if($result){
        echo 'Data updated';
    }else{
        echo 'Data Updation Failure';
    }

?>