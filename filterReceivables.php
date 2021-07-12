<?php
    require_once "connect.php";

    if(isset($_POST)){
        $data = array();

        if($_POST['clientId'] == 0){
            $query = "select * from bill_master bm inner join clientlist cl inner join firmname fn on bm.firm_id = fn.firmNameId and bm.client_id = cl.clientId where (fn.firmNameId=".$_POST['firm3']." or fn.firmNameId=".$_POST['firm2']." or fn.firmNameId=".$_POST['firm1'].") and cl.clientId>0";    
        }
        else{
            $query = "select * from bill_master bm inner join clientlist cl inner join firmname fn on bm.firm_id = fn.firmNameId and bm.client_id = cl.clientId where (fn.firmNameId=".$_POST['firm3']." or fn.firmNameId=".$_POST['firm2']." or fn.firmNameId=".$_POST['firm1'].") and cl.clientId=".$_POST['clientId'];
        }
        $result = mysqli_query($con, $query);
        if($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($data,$row);
            }
        }
        echo json_encode($data);
    }

?>