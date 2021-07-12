<?php
include 'connect.php';

if(isset($_GET)){
    $firmId =  $_GET['firmId'];
    setcookie("firmId",$firmId);  //firmId for bill_master insertion
    $query = "select invoice_no from bill_master where firm_id =".$firmId." order by invoice_no DESC limit 1";
    $result = mysqli_query($con,$query);
    $lastInvoiceNo = '2021-22/0';
    if($result->num_rows>0){
        while($row=mysqli_fetch_assoc($result)){
            $lastInvoiceNo = '2021-22/'.(((int)(explode('/',$row['invoice_no'])[1]))+1);
        }
    }

    echo $lastInvoiceNo;
}
?>