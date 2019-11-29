<?php
    $con = mysqli_connect("localhost", "root" , "", "project");

    $eid = $_POST["eid"];
    $pwd = $_POST["pwd"];

    $command = "select * from user where eid = '$eid' and pwd = '$pwd'";
    $result = mysqli_query($con, $command);
    if($result)
      echo $result->num_rows;
 ?>
