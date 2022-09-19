<?php
include_once 'config.php';
if(isset($_GET['del']))
{
    $id=$_GET['del'];
   
    $sql=" DELETE FROM contenttbl WHERE id='$id'";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:Display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>