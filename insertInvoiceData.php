<?php

    include 'connect.php';

    if(isset($_POST)){
        $temp = array_values($_POST);
        $firmId = $_COOKIE['firmId'];
        $clientId = $_COOKIE['clientId'];

        // print_r($temp);
        
        $formData  = array();
        $particulars = array();
        $notes = array();

        if($firmId<3){

            array_push($formData,$temp[0],$temp[1],$temp[2],$temp[3]);

            for($i=4;$i<sizeof($temp);$i = $i+3){
                $particulars[$temp[$i]] = $temp[$i+2];
                $notes[$temp[$i]] = $temp[$i+1]; 
            }
        }
        else{
            array_push($formData,$temp[0],$temp[1],$temp[2],$temp[3],$temp[4],$temp[5]);

            for($i=6;$i<sizeof($temp);$i = $i+3){
                $particulars[$temp[$i]] = $temp[$i+2];
                $notes[$temp[$i]] = $temp[$i+1]; 
            }
            
        }
        
        // print_r($particulars);
        // print_r($formData);
        // print_r($notes);

        $totalAmount = array_sum(array_values($particulars));

        if($firmId==3){
            $totalAmount += $totalAmount*0.18;
            $queryBillMaster = "insert into bill_master values('".$formData[0]."',".$firmId.",'".$formData[1]."',".$clientId.",".$totalAmount.",0,0,0,0,0,0,".$formData[5].")";
        }else{
            $queryBillMaster = "insert into bill_master values('".$formData[0]."',".$firmId.",'".$formData[1]."',".$clientId.",".$totalAmount.",0,0,0,0,0,0,null)";
        }

        //  print_r($formData);
        // echo "\n";
        // print_r($particulars);

        // echo $firmId;
        // echo $clientId;
        // echo $totalAmount;
        // echo $queryBillMaster;

        $result = mysqli_query($con,$queryBillMaster);
        
        if($result){
            
            foreach ($particulars as $pID => $pAmount) {
                $tax_amount = 0;
                if($firmId==3){
                    $tax_amount = $pAmount + $pAmount*0.18;
                }
                $queryBillDetails = "insert into bill_details (bill_master_id,firm_id,service_id,taxable_amount,tax_amount,service_note) 
                                    values('".$formData[0]."','".$firmId."',".$pID.",".$pAmount.",".$tax_amount.",'".$notes[$pID]."')";
                $result1 = mysqli_query($con,$queryBillDetails);
                if($result){
                    $flag=1;
                }else{
                    $flag=0;
                    break;
                }
            }
            if($flag){
                echo "<script>alert('Bill Generated Successfully');</script>";
            }else{
                echo "<script>alert('Error during Bill Details Generation');</script>";
            }
            
        }else{
            echo "<script>alert('Error during Bill Master Generation');</script>";
        }  
        
        echo "
            <script>
                window.location = './fill.html';
            </script>
        ";

    }

?>