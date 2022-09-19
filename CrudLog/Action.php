<?php

 
$con = mysqli_connect("localhost","CrudLog","ZalZip18","cruddata");
 
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $pass=$_POST['password'];
   

    $query="INSERT INTO logintbl ($name,$pass) VALUES ('UserName','UserPassword');";
    mysqli_query($con,$query);
    header("Location:Content.php");

}
?>