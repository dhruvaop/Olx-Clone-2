<?php
session_start();

    if(isset($_POST["rbtn"])){
        include("config.php");
        $verifyotp=$_POST['rotp'];
    $sql="SELECT *from otp where otp='$verifyotp'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
       
            //     $con = mysqli_connect($host, $user, $password, $db_name);  
            // if(mysqli_connect_errno()) {  
            //    die("Failed to connect with MySQL: ". mysqli_connect_error());  
            // }  
            // $user=($_POST['username']);
            // $fname=($_POST['fname']);
            // $lname=($_POST['lname']);
            // $email=($_POST['email']);
            // $phone=($_POST['phone']);
            // $addr=($_POST['address']);
            // $city=($_POST['city']);
            // $state=($_POST['state']);
            // $pass=($_POST['pass']);
            
            
            
            
            $sql1="insert into user_details(username, first_name, last_name, email, phone, address, city, state, pass) values('".$_SESSION['username']."','".$_SESSION['fname']."','".$_SESSION['lname']."','".$_SESSION['email']."','".$_SESSION['phone']."','".$_SESSION['addr']."','".$_SESSION['city']."','".$_SESSION['state']."','".$_SESSION['pass']."')"; 
             
            
             
               if(mysqli_query($con,$sql1))
              {
                header("location:login.php");
            
                }
                else {
                    // $_SESSION['isloggedin']=false;
                  echo "registration failed";
            
                }
            
            }
            else {
                echo "OTP not correct";
            }
    
    
        }


?>