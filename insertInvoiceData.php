<?php

    include 'connect.php';

    if(isset($_POST)){
        $temp = array_values($_POST);
        $firmId = $_COOKIE['firmId'];
        $clientId = $_COOKIE['clientId'];

        print_r($temp);
        
        $formData  = array();
        $particulars = array();

        if($firmId<3){
            foreach ($temp as $key => $value) {
                if($key<4){
                    array_push($formData,$value);         
                }else if($key>=4 && $key%2==0){
                    $particulars[$value] = $temp[$key+1];
                }else{
                    continue;
                }
            }

        }else{
            foreach ($temp as $key => $value) {
                if($key<6){
                    array_push($formData,$value);         
                }else if($key>=6 && $key%2==0){
                    $particulars[$value] = $temp[$key+1];
                }else{
                    continue;
                }
            }

        }
        
        print_r($particulars);
        print_r($formData);
        return;

        $totalAmount = array_sum(array_values($particulars));

        if($firmId==3){
            $totalAmount += $totalAmount*0.18;
            $queryBillMaster = "insert into bill_master values('".$formData[0]."',".$firmId.",'".$formData[1]."',".$clientId.",".$totalAmount.",0,0,0,0,0,0,".$formData[5].")";
        }else{
            $queryBillMaster = "insert into bill_master values('".$formData[0]."',".$firmId.",'".$formData[1]."',".$clientId.",".$totalAmount.",0,0,0,0,0,0,null)";
        }

         print_r($formData);
        // echo "\n";
        // print_r($particulars);

        // echo $firmId;
        // echo $clientId;
        // echo $totalAmount;
        // echo $queryBillMaster;
        return;
        $result = mysqli_query($con,$queryBillMaster);
        
        if($result){
            
            foreach ($particulars as $pID => $pAmount) {
                $tax_amount = 0;
                if($firmId==3){
                    $tax_amount = $pAmount + $pAmount*0.18;
                }
                $queryBillDetails = "insert into bill_details (bill_master_id,firm_id,service_id,taxable_amount,tax_amount) 
                                    values('".$formData[0]."','".$firmId."',".$pID.",".$pAmount.",".$tax_amount.")";
                $result1 = mysqli_query($con,$queryBillDetails);

                if($result1){
                    echo "<script>alert('Bill Generated Successfully');</script>";
                }else{
                    echo "<script>alert('Error during Bill Details Generation');</script>";
                }
            }
            
        }else{
            echo "<script>alert('Error during Bill Master Generation');</script>";
        }  
        
        /*echo "
            <script>
                window.location = './fill.html';
            </script>
        ";*/  

    }

?>