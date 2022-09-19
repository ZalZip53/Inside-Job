<?php
session_start();
include_once 'config.php';

if(isset($_POST['Login']))
{
   $username=$_POST['email'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   $sql ="SELECT * FROM tbluser WHERE Email='$email'  AND  Password='$password' OR Username='$username'";
   $result=mysqli_query($conn,$sql);

   if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("location:./ Content/Home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
      die(mysqli_error($conn));
	}
 
  
}






/*if($_SERVER['REQUEST_METHOD'] == "POST")
{
   //something was posted
   $email= $_POST['email'];
   $password = $_POST['password'];
  
   if(!empty($email) && !empty($password))
   {

      //read from database
      $query = "SELECT * FROM tblusers WHERE Email = '$email' limit 1";
      $result = mysqli_query($conn, $query);

      if($result)
      {
         if($result && mysqli_num_rows($result) > 0)
         {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $password)
            {

               $_SESSION['user_id'] = $user_data['user_id'];
               header("location: index.php");
               die;
            }
         }
         header("location: index.php");
    }
      
     echo "wrongs username or password!";
   }else
   {
      echo "wrong username or password!";
  }

}

     */ 
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="stylessss.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">View Form</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Login Form
            </div>
            <form  method="POST">
               <div class="data">
                  <label>Email</label>
                  <input type="text" required name="email" >
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required name="password" >
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button  type="submit" name="Login" >Login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="SignUp.php">Signup now</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
