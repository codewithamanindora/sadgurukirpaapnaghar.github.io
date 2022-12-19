<?php require("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

<link rel="stylesheet" href="../css/login.css">

</head>
<body>
<div class="form-container">

<form method="POST">
   <h3>login now</h3>
   <input type="text" name="AdminName"  placeholder="enter your username" autocomplete="off">

   <input type="password" name="AdminPassword"  placeholder="enter your password">

   <input type="submit" name="Signin" value="login now" class="form-btn" >

   <p>don't have an account? <a href="#"></a> register now</a></p>
</form>
</div>
<?php
if(isset($_POST['Signin']))
{
  $query="SELECT * FROM `admin_login` WHERE `Admin_Name`='$_POST[AdminName]' AND `Admin_Password`=$_POST[AdminPassword]";
  $result= mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1)
  {
    session_start();
    $_SESSION['AdminLoginId']=$_POST['AdminName'];
    header("location: adminpanel.php");
  }else{
    echo "<script>alert('incorrect')</script>";
   
  }

};
?>


</body>
</html>