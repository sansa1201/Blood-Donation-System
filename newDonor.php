<?php
    require("connect.php");

    // get the variables from the previous page 
    // remember we used method=post
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $bloodid = $_POST['bloodid'];
    $bgroup = $_POST['bgroup'];

    //run the insert query using above variables
    $sql = "INSERT INTO DONOR VALUES('','$fname','$lname','$dob','$phone','$bloodid','$bgroup')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("LOCATION: Donor.php");    
?>