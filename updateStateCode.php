<?php
    session_start();

    include 'connect.php';
    
    if(isset($_POST)){
        $sCode  = $_POST['state_code'];
        $sName = $_POST['state_name'];
    }else{
        echo "ERROR!!";
    }
    
    $query = "update gst_state_code_list set state_name='".$sName."' where state_code=".$sCode;
    $result = mysqli_query($con,$query);

    if($result){
        echo 'Data updated';
    }else{
        echo 'Data Updation Failure';
    }

?>