<?php

    include 'connect.php';

    if(isset($_POST)){
        $temp = array_values($_POST);
        $firmId = $_COOKIE['firmId'];
        $clientId = $_COOKIE['clientId'];

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
        
        $totalAmount = array_sum(array_values($particulars));

        // print_r($formData);
        // echo "\n";
        // print_r($particulars);
        // echo "\n";
        // echo "Total Amount:".$totalAmount;

        $queryBillMaster = "insert into bill_master(invoice_no,firm_id,invoice_date,client_id,total_amount) values('".$formData[0]."',".$firmId.",'".$formData[1]."',".$clientId.",".$totalAmount.")";
        $result = mysqli_query($con,$queryBillMaster);

        if($result){
            echo "Success";
        }else{
            echo "Error";
        }

    }

?>