<?php 

include "connect.php";



if(isset($_POST)){
    $client = $_POST["id"];

    $sql="select * from clientlist where clientId ='".$client."'";
        $result=mysqli_query($con,$sql) or die($con->error);
        
        $clientDetails=array();
        
        if($result->num_rows>0){

            $row=$result->fetch_assoc();
                array_push($clientDetails,$row['clientAddress']);
                array_push($clientDetails,$row['GST']);
                echo json_encode($clientDetails);
        }
    }
?>