<?php
session_start();
include_once 'config.php';


if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $number=$_POST['number'];
   $email=$_POST['email'];
   $password=$_POST['password'];

   if(!empty($username) && !empty($email) && !empty($password))
   {
       
       $user_id = rand(time(), 10000);
       $query ="INSERT INTO tbluser (user_id,Username,Number,Email,Password) VALUES ('$user_id','$username','$number','$email','$password')";
      
       $result=mysqli_query($conn,$query);
       if($result){
           header('location:Login.php');
       }
       else{
           die(mysqli_error($conn));
       }

   }
   die(mysqli_error($conn));
}












/*
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $mobile=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql=" INSERT INTO contenttbl (Name,Surname,Email,Mobile,Password) 
           VALUES ('$name','$surname','$mobile','$email','$password')";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:Display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
*/
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      <link rel="stylesheet" href="styless.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    <div class="container">
        <div class="text">Register</div>
        
        <form action="#" method="post">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="username">
                 <div class="underline"></div>
                 <label for="">Username</label>
              </div>
              <div class="input-data">
                 <input type="text" required name="number">
                 <div class="underline"></div>
                 <label for="">Mobile Phone</label>
              </div>
           </div>
         
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required name="email">
                 <div class="underline"></div>
                 <label for="">Email Address</label>
              </div>
            
              <div class="input-data">
                 <input type="text" required name="password">
                 <div class="underline"></div>
                 <label for="">Password</label>
              </div>

           </div>
        
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" name="submit">
                       
                    </div>
                     <div class="input-data">
                       <br/>
                       <a href="index.php" ><b>Cancel ?</b></a>
                 </div>
              </div>
           </div>
          
        </form>
     </div>
   </body>
</html>