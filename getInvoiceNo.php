<?php
    include 'connect.php';

    $firmId = 0;
    $fYear = 0;
    $lastInvoiceNo = '2021-22/0';

    if(isset($_GET)){
        // print_r($_GET);
        $firmId =  $_GET['firmId'];
        $fYear = $_GET['fYear'];
        $lastInvoiceNo = $fYear."/0";
        setcookie("firmId",$firmId);  //firmId for bill_master insertion
        $query = "select invoice_no from bill_master where firm_id=".$firmId." and invoice_no like '".$fYear."%' order by invoice_no DESC limit 1";
        
        $result = mysqli_query($con,$query);
        if($result->num_rows>0){
            while($row=mysqli_fetch_assoc($result)){
                $lastInvoiceNo = $fYear."/".(((int)(explode('/',$row['invoice_no'])[1]))+1);
            }
        }
        echo $lastInvoiceNo;

    }
?>