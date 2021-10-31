<?php
    require_once "./connect.php";

    // print_r($_POST);
    $userID = $_POST['username'];
    $pass = md5($_POST['password']);
    $sql="select * from user where userId = '".$userID."' and password = '".$pass."' ";
    $result=mysqli_query($con,$sql);
    
    if($result){
        if(mysqli_num_rows($result)==1){
            session_start();
            echo "
                <script>
                    alert('Logged in'); 
                    document.cookie = 'loggedIn=1';       
                    location.replace('fill.html');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Invalid Credentials!!!!');
                    location.replace('index.html');
                </script>
            ";
        }
    }else{
        echo "
            <script>
                alert('Some Error Occured while loggin in!!!!);
                location.replace('index.html');
            </script>
        ";
    }
