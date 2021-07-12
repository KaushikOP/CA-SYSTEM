<?php 

include "connect.php";

if(isset($_POST)){
    $client = $_POST["id"];
    setcookie('clientId',$client);  // clientId for bill_master insert query
    $sql="select * from clientlist where clientId =".$client;
        $result=mysqli_query($con,$sql) or die($con->error);
        
        $clientDetails=array();
        
        if($result->num_rows>0){
            while($row=mysqli_fetch_assoc($result)){
                array_push($clientDetails,$row["clientAddress"]);
                array_push($clientDetails,$row["GST"]);
                array_push($clientDetails,$row["clientName"]);
                // echo json_encode($row);
            }
            
        }
        echo json_encode($clientDetails);
    }
?>