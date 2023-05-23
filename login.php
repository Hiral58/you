<?php

$conn = mysqli_connect('localhost','root','','cart_sys');

session_start();

if(isset($_POST['submit'])){

  // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  // $cpass = md5($_POST['cpassword']);
  // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_r WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = '<font color=red><text-align:center>*incorrect email or password! ';

   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="style1.css">
   

</head>
<body>
   

   <form action="reset.php" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <div class="form-container">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="password" name="password" required placeholder="enter your password" class="box">
      <a href="reset.php">Forgot password ?</a>
      <input type="submit" name="submit" value="Login now" class="btn">
      

<!--<select name="user_type" class="box">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>-->

      <p>Dont have an account? <a href="register.php">Register now</a></p>
   </form>


   </div>
</body>
</html>