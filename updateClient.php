<?php

    include 'connect.php';
    
    if(isset($_POST)){
        $cId  = $_POST['clientId'];
    }else{
        echo "ERROR!!";
    }

    $name = $_COOKIE['cname'];
    $addr = $_COOKIE['addr'];
    $mob = $_COOKIE['mob'];
    $gst = $_COOKIE['gst'];
    
    if($gst == '-'){
        $gst = null;
    }

    $query = "update clientlist set clientName='".$name."', GST='".$gst."', clientAddress='".$addr."', mobile_no='".$mob."' where clientId=".$cId;
    $result = mysqli_query($con,$query);

    if($result){
        echo 'Data updated';
    }else{
        echo 'Data Updation Failure';
    }

?>