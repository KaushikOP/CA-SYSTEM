<?php 

    session_start();

    include './connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $sac = $_POST['sac'];
        $firm = $_POST['firm'];
        
        print_r($_POST);

        if($sac != ''){
            $query = "select * from services where SAC = ".$sac;
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0){
                echo "<script>alert('SAC Number already present');</script>";
                echo "<script> location.replace('./newService.html'); </script>";
                return; 
            }
        }else{
            $sac=0;
        }

        $query = "insert into services values(NULL,'".$desc."','".$name."',".$sac.",".$firm.")";
        $result = mysqli_query($con,$query);
    
        if($result){
            echo "<script>alert('Service Added Successfully');</script>";
        }else{
            echo "<script>alert('Error while adding Service');</script>";
        }
        


       echo "
            <script>
                location.replace('./newService.html');
            </script>
        ";

    }
?>