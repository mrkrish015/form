<?php
// Establish connection

$con = mysqli_connect("localhost", "root", "", "project");

// Prepare the data for insertion

$regno = mysqli_real_escape_string($con, $_POST["regno"]);
$staff = mysqli_real_escape_string($con, $_POST["staff"]);

// Check if the data already exists
$sql_check = "SELECT * FROM feedback WHERE Regno ='$regno' AND Staffname = '$staff'  ";
$result_check= mysqli_query($con, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    // Data already exists
    echo "already submitted.";
} else {
    // Insert the data into the database
    $sql_insert = "INSERT INTO feedback(Regno,Staffname,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
    VALUES('{$_POST["regno"]}','{$_POST["staff"]}','{$_POST["q1"]}','{$_POST["q2"]}','{$_POST["q3"]}','{$_POST["q4"]}',
    '{$_POST["q5"]}','{$_POST["q6"]}','{$_POST["q7"]}',
    '{$_POST["q8"]}','{$_POST["q9"]}','{$_POST["q10"]}')";
    if (mysqli_query($con, $sql_insert)) {
        echo "Save successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Close the connection
mysqli_close($con);
?>
