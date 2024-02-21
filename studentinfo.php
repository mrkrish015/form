<?php
$con=mysqli_connect("localhost","root","","project");
    $sql="SELECT* from studentinfo where Regno='$username'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
 ?>
 <?php
session_start();
$_SESSION['Reg']=$username;
$_SESSION['Class']=$row['Class'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewreport" content="width=device-width,initial-scale=1.0"> 
        <link rel="stylesheet" href="studentinfo.css">      
        <link rel="icon" href="jmc.png">
    <title>feedback</title>
    </head>
    <body>
        <?php include "head.php";?>
        <div class="bg-text">
        <center><h1>Student Feedback</h1></center>
        <fieldset>
            <legend>student information</legend>
            <table>
            <tr>
                <td>Reg.no</td>
                <th><?php echo $row['Regno'];?></th>
                <td>Roll.no</td><th><?php echo $row['Rollno'];?></th>
            </tr>
            <tr>
                <td>Name:</td><td><?php echo $row['Name'];?></td>
            </tr>
            <tr>
                <td>Degree</td>
                <td><?php echo $row['Graducation'];?></td>
            </tr>
            <tr>
                <td>ManageMent</td>
                <td><?php echo $row['Management'];?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $row['Gender'];?></td>
            </tr>
            <tr>
                <td>Degree</td>
                <td><?php echo $row['Degree'];?></td>
            </tr>
            <tr><td>Major</td>
                <td><?php echo $row['Major'];?></td>
            </tr>
            <tr><td>Class</td>
                <td><?php echo $row['Class'];?></td>
            </tr>
            <tr>
                <td>Section</td>
                <td><?php echo $row['Section'];?></td>
            </tr>
            <tr>
                <td>Batch</td>
                <td><?php echo $row['Batch'];?> </tr>
               </table>
        </fieldset>
        <br>

        <fieldset>
        <div class="two">
            <center>
          <a href="feedback.php"><button>Next</button></a><center>
        </div>
        <a href="cancel.php"><button>Logout</button></a>
        </fieldset>
    </body>
</html>