<?php
    session_start();
    include 'connect.php';
    $firmId = 0;
    $invoice = -1;
    if(isset($_POST)){
        $firmId  = $_POST['firmId'];
        $invoice = $_POST['invoice_no'];
    }

    $amount_received = $_COOKIE['amount_received'];
    $receipt_date = $_COOKIE['receipt_date'];
    $payment_mode = $_COOKIE['pay_mode'];
    $cheque_no = $_COOKIE['chq'];
    $amount_pending = $_COOKIE['pending'];
    $tds = $_COOKIE['tds'];


    $query = "update bill_master set amount_received=".$amount_received.
                ", receipt_date='".$receipt_date."', payment_mode='".$payment_mode.
                "', cheque_no='".$cheque_no."', amount_pending=".$amount_pending.", tds=".$tds.
                " where invoice_no='".$invoice."' and firm_id=".$firmId;
    $result = mysqli_query($con,$query);

    if($result){
        echo 'Data updated';
    }else{
        echo 'Data Updation Failure';
    }

?>