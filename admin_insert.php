<?php
  $id = $_POST['id'];
  $password = $_POST['password'];
  $pass=password($password);
  $con = mysqli_connect("localhost", "temp", "nk304704");
    if(!$con){
      die('Could not connect: ' . mysql_error);
    } else {
      mysqli_select_db($con, "project");
      $sql_display = "insert into admin values ('$id', '$pass')";
      $result = mysqli_query($con, $sql_display);
  }
  mysqli_close($con);
?>