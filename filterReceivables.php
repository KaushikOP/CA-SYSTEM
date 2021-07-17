<?php
    require_once "connect.php";

    if(isset($_POST)){

        $clientIdStr=" and cl.clientId=".$_POST['clientId']." ";
        $fiscalYearStr="and bm.invoice_no LIKE '".$_POST['fiscalYear']."%'"." ";
        
        if($_POST['clientId'] == 0){
            $clientIdStr=" and cl.clientId>0 ";
        }

        if($_POST['fiscalYear'] == 0){
            $fiscalYearStr=" and bm.invoice_no LIKE '%'";
        }

        $query = "select * from bill_master bm inner join clientlist cl inner join firmname fn on bm.firm_id = fn.firmNameId and bm.client_id = cl.clientId where (fn.firmNameId=".$_POST['firm3']." or fn.firmNameId=".$_POST['firm2']." or fn.firmNameId=".$_POST['firm1'].")".$clientIdStr.$fiscalYearStr;
        echo $query;
    }
    
    

    /*if(isset($_POST)){
        if($_POST['clientId'] == 0){
            $query = "select * from bill_master bm inner join clientlist cl inner join firmname fn on bm.firm_id = fn.firmNameId and bm.client_id = cl.clientId where (fn.firmNameId=".$_POST['firm3']." or fn.firmNameId=".$_POST['firm2']." or fn.firmNameId=".$_POST['firm1'].") and cl.clientId>0";    
        }
        else{
            $query = "select * from bill_master bm inner join clientlist cl inner join firmname fn on bm.firm_id = fn.firmNameId and bm.client_id = cl.clientId where (fn.firmNameId=".$_POST['firm3']." or fn.firmNameId=".$_POST['firm2']." or fn.firmNameId=".$_POST['firm1'].") and cl.clientId=".$_POST['clientId'];
        }
        echo $query;
    }*/
?>