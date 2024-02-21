<?php
if(!isset($_POST['submit']))
{
   $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","root","","project");
    $sql="SELECT* from login where username='$username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
   if($row>0)
    {
      include "studentinfo.php";
    }
    else{
        header("location:login.php");
    }
    
}
?>
