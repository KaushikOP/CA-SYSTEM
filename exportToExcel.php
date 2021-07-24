<?php
    require_once "connect.php";
    
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    }

    if(isset($_POST['query'])){
        $fileName = "trial_".date('m/d/Y h:i:s a', time()).".xls"; 
        
        $result = mysqli_query($con,$_POST['query']);
        $counter = 1;
        $fields = array('Sr. No.','Firm Name','Bill No.','Date','Party','Amount','Amount Received','Receipt Date','Mode','Chq. No.','Amount Pending','TDS');
        $excelData = implode("\t", array_values($fields))."\n";
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $lineData = array($counter,$row['shortForm'],$row['invoice_no'],$row['invoice_date'],$row['clientName'],$row['total_amount'],$row['amount_received'],$row['receipt_date'],$row['payment_mode'],$row['cheque_no'],$row['amount_pending'],$row['tds']);
                array_walk($lineData,'filterData');
                $excelData .= implode("\t",array_values($lineData));
                $counter++;
            }
        }
        else{
            
        }

        header("Content-Type: application/ms-excel;charset=utf-8"); 
        header("Content-Disposition: attachment; filename=\"$fileName\""); 
        header("Expires: 0");
        // Render excel data 
        echo $excelData; 
 
        exit;
    }
    else{
        echo "<script>alert('Please Filter data before exporting to excel.');
            window.location = './Receivables.html';
        </script>";
    }
?>