<?php
include_once 'config.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM   contenttbl WHERE id='$id'";
$results=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($results);
    $name=$row['Name'];
    $surname=$row['Surname'];
    $mobile=$row['Mobile'];
    $email=$row['Email'];
    $password=$row['Password'];

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $mobile=$_POST['number'];
    $password=$_POST['password'];

    $sql=" UPDATE contenttbl SET id='$id',Name='$name',Surname='$surname',Email='$email',Mobile='$mobile',Password='$password'
    WHERE id='$id'";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:Display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
        <header><h2>Update User Infomation</h2></header>
<form class="row g-3" method="post">
  <div class="col-md-6">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Please Enter Name" name="name" value=<?php echo $name;?>>
  </div>
  <div class="col-md-6">
    <label  class="form-label">Surname</label>
    <input type="text" class="form-control" placeholder="Please Enter Surname" name="surname" value=<?php echo $surname;?>>
  </div>
  <div class="col-12"> 
    <label fclass="form-label">Mobile Number:</label>
    <input type="text" class="form-control"  placeholder="074291028392" name="number" value=<?php echo $mobile;?>>
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Please Enter Email" name="email" value=<?php echo $email;?>>
  </div>
  <div class="col-md-6">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" value=<?php echo $password;?>>
  </div>
  
  <div class="col-md-6">
  <br/>
  <button type="button" class="btn btn-secondary" ><a href="Display.php" class="text-light">Cancel</button> 
  <button type="submit" class="btn btn-primary" name="update">Update</button>
  </div>
</div>
</form>
</body>