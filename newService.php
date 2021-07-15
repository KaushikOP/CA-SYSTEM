<?php 
    include './connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $sac = $_POST['sac'];
        $firm = $_POST['firm'];

        $query = "select * from services where SAC = ".$sac;
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('SAC Number already present');</script>";         
        }else{
            $query = "insert into services values(NULL,'".$name."','".$desc."',".$sac.",".$firm.")";
            $result = mysqli_query($con,$query);
    
            if($result){
                echo "<script>alert('Service Added Successfully');</script>";
            }else{
                echo "<script>alert('Error while adding Service');</script>";
            }
        }


        echo "
            <script>
                location.replace('./newService.html');
            </script>
        ";

    }
?>