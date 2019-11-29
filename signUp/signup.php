<?php
    $con = mysqli_connect("localhost", "root" , "", "project");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $eid = $_POST["eid"];
    $pwd = $_POST["pwd"];

    $command = "INSERT INTO user VALUES ('$fname', '$lname', '$eid', '$pwd')";
    mysqli_query($con, $command);
 ?>
