<?php 
    include './connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mob'];
        $GST = $_POST['gst'];

        $query = "select * from clientlist where GST = '".$GST."'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('GST Number already present');</script>";
            return;
        }

        $query = "insert into clientlist values(NULL,'".$name."','".$GST."','".$address."','".$mobile."')";
        $result = mysqli_query($con,$query);

        if($result){
            echo "<script>alert('Client Added Successfully');</script>";
        }else{
            echo "<script>alert('Error while adding Client');</script>";
        }

        echo "
            <script>
                location.replace('./newClient.html');
            </script>
        ";

    }
?>