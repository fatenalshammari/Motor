<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_motor ="motors";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_motor);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$save_button= $_POST['save'];

$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];


if(isset($_POST['save'])){


  //  $query = "INSERT INTO moters (motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$m1', '$m2', '$m3', '$m4', '$m5', $m6)";
    $query = "UPDATE moters SET motor1='$m1', motor2='$m2', motor3='$m3',
     motor4='$m4', motor5='$m5' ,motor6='$m6' ";
    $result = mysqli_query($conn, $query);

    if ($result == TRUE) {
    echo "Update record successfully";

  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}



   if(isset($_POST['run'])) {

      $query = "select on from button_on_off WHERE on ='1' ";
      $result = mysqli_query($conn, $query);
      if( $result == true)
      {
          echo "ON mode!";
      }
      else{
          echo "ERROR: Unable to past <br>";
      }

  }else if(isset($run_button)) {



      $query = "select off from button_on_off WHERE off='0' ";
      $result = mysqli_query($conn, $query);

      if($result ==TRUE)
      {
          echo "OFF mode!";
      }
      else{
          echo "ERROR: Unable to past <br>";
      }
  }

  $conn->close();
  ?>
