<?php
    session_start();
    include 'connect.php';
    
    if(isset($_POST)){
        $sId  = $_POST['serviceId'];
    }else{
        echo "ERROR!!";
    }

    $name = $_COOKIE['name'];
    $desc = $_COOKIE['desc'];
    $sac = $_COOKIE['sac'];
    $firm = $_COOKIE['firm'];
    
    $query = "update services set serviceName='".$name."', serviceDescription='".$desc."', SAC='".$sac."', firmNameID=".$firm." where serviceId=".$sId;
    $result = mysqli_query($con,$query);

    if($result){
        echo 'Data updated';
    }else{
        echo 'Data Updation Failure';
    }

?>