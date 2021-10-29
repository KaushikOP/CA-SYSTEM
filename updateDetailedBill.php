<!DOCTYPE html>

<?php
    require_once 'connect.php';
    
    if(isset($_POST['callFunction'])){
        switch((int)$_POST['callFunction']){
            case 0:
                updateBillDetails();
                break;
            
            case 1:
                deleteParticular();
                break;
            
            case 2:
                addParticularToBill();
                break;
        }
    }
    

    function updateBillDetails(){
        GLOBAL $con;

        if(isset($_POST)){
            
            $firmId = $_POST['firmId'];
            $invoice = $_POST['invoice_no'];
            $serviceId = $_POST['serviceId'];
            $serviceNote = $_POST['serviceNote'];
            $taxAmt = $_POST['taxAmt'];
            $perticularId = $_POST['perticularId'];
    
            $query = "update bill_details set service_id = $serviceId, taxable_amount = $taxAmt, service_note = '$serviceNote' 
                    where bill_master_id='$invoice' and firm_id= $firmId and bill_details_id= $perticularId";
            $result = mysqli_query($con,$query);
    
            if($result){
                $query1 = "select sum(taxable_amount) from bill_details where bill_master_id='$invoice' and firm_id= $firmId";
                $result1 = mysqli_query($con,$query1);
                if(mysqli_num_rows($result1)==1){
                    $row = $result1->fetch_array();
                    if($firmId == 3){
                        $row[0] = $row[0] + ($row[0]*0.18);
                    }
                    $query2 = "update bill_master set total_amount = ".$row[0]." where invoice_no ='$invoice' and firm_id= $firmId";
                    $result2 = mysqli_query($con,$query2);
                    if($result2){
                        echo 'Data updated';
                    }
                    else{
                        echo 'Data Updation Failure in Bill Master';
                    }
                }
                else{
                    echo 'Bill Master Sum error';
                }
            }else{
                echo 'Data Updation Failure in Bill Details';
            }
        }
    }

    function deleteParticular(){
        GLOBAL $con;

        if(isset($_POST)){
            
            $firmId = $_POST['firmId'];
            $invoice = $_POST['invoice_no'];
            $id = $_POST['bdId'];
            $deductionAmount = $_POST['deductAmount'];
    
            $query = "delete from bill_details where bill_details_id=".$id; 
            $result = mysqli_query($con,$query);
    
            if($result){
                
                    $query2 = "update bill_master set total_amount = total_amount-".$deductionAmount." where invoice_no ='$invoice' and firm_id= $firmId";
                    $result2 = mysqli_query($con,$query2);
                    if($result2){
                        echo 'Data updated';
                    }
                    else{
                        echo 'Data Updation Failure in Bill Master';
                    }
                
            }else{
                echo 'Data Updation Failure in Bill Details';
            }
        }
    }

    function addParticularToBill(){
        GLOBAL $con;

        $var = explode(":",$_POST['invoice_firm']);
        $temp = array_values($_POST);

        $particulars = array();
        $notes = array();

        // print_r($temp);

        for($i=2;$i<sizeof($temp);$i = $i+3){
            $particulars[$temp[$i]] = $temp[$i+2];
            $notes[$temp[$i]] = $temp[$i+1]; 
        }
    
        // print_r($particulars);
        // print_r($notes);
        
        $totalAmountToAdd = array_sum(array_values($particulars));

        if((int)$var[0]==3){
            $totalAmountToAdd += $totalAmountToAdd*0.18;
        }
        $queryBillMaster = "UPDATE bill_master SET total_amount= total_amount+".$totalAmountToAdd." where invoice_no='".$var[1]."' and firm_id=".(int)$var[0];

        // echo $queryBillMaster;

        $result = mysqli_query($con,$queryBillMaster);
        
        if($result){
            
            foreach ($particulars as $pID => $pAmount) {
                $tax_amount = 0;
                if($var[0]==3){
                    $tax_amount = $pAmount + $pAmount*0.18;
                }else{
                    $tax_amount = $pAmount;
                }
                $queryBillDetails = "insert into bill_details (bill_master_id,firm_id,service_id,taxable_amount,tax_amount,service_note) 
                                    values('".$var[1]."',".(int)$var[0].",".$pID.",".$pAmount.",".$tax_amount.",'".$notes[$pID]."')";
                $result1 = mysqli_query($con,$queryBillDetails);
                if($result1){
                    $flag=1;
                }else{
                    $flag=0;
                    break;
                }
            }
            if($flag){
                echo "<script>alert('Bill Generated Successfully'); </script>";
                
            }else{
                echo "<script>alert('Error during Bill Details Generation');</script>";
            }
            
        }else{
            echo "<script>alert('Error during Bill Master Generation');</script>";
        } 
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
?>