<?php

$conn = mysqli_connect('localhost','root','','cart_sys');

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $token= md5(rand());/*generate randown numbers*/
   $check="select * email from user_r WHERE email='$email' LIMIT 1";
   $check_run=mysqli_query($conn,$check);
   if(mysqli_num_rows($check_run)>0)
   {
        $row=mysqli_fetch_array($check_run);
        $get=$row['name'];
        $get=$row['email'];

        
   }
   else{
    $_SESSION['status']="No email found";
    header("Location: reset.php");
    exit(0);
   }
}