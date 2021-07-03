<?php

  //connect to databse
  $dbc = new mysqli('localhost', 'root', 'mM123', 'robotarm');//robotarm.engines

  /*if ($dbc->connect_error) {
    echo "database connection error";
  }
  else {
    echo "database connection success<br>";
  }*/

  if(isset($_POST['right'])){
    $last = "SELECT MAX(id) AS last_id FROM engines";
    $result = mysqli_query($dbc, $last);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $last_id = $row['last_id'];

    $sql = mysqli_query($dbc,"UPDATE engines SET direction = 'Right' WHERE id = '$last_id'");
    //echo "right";

    if(!$sql){
      echo "nothing inserted into table.";
    }
  }

  if(isset($_POST['left'])){
    $last = "SELECT MAX(id) AS last_id FROM engines";
    $result = mysqli_query($dbc, $last);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $last_id = $row['last_id'];

    $sql = mysqli_query($dbc,"UPDATE engines SET direction = 'Left' WHERE id = '$last_id'");
    //echo "left";

    if(!$sql){
      echo "nothing inserted into table.";
    }
  }


  if(isset($_POST['forward'])){
    $last = "SELECT MAX(id) AS last_id FROM engines";
    $result = mysqli_query($dbc, $last);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $last_id = $row['last_id'];

    $sql = mysqli_query($dbc,"UPDATE engines SET direction = 'Forward' WHERE id = '$last_id'");
    //echo "forward";

    if(!$sql){
      echo "nothing inserted into table.";
    }
  }

  if(isset($_POST['backward'])){
    $last = "SELECT MAX(id) AS last_id FROM engines";
    $result = mysqli_query($dbc, $last);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $last_id = $row['last_id'];

    $sql = mysqli_query($dbc,"UPDATE engines SET direction = 'Backward' WHERE id = '$last_id'");
    //echo "backward";

    if(!$sql){
      echo "nothing inserted into table.";
    }
  }

  if(isset($_POST['stop'])){
    $last = "SELECT MAX(id) AS last_id FROM engines";
    $result = mysqli_query($dbc, $last);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $last_id = $row['last_id'];

    $sql = mysqli_query($dbc,"UPDATE engines SET direction = 'Stoped' WHERE id = '$last_id'");
    echo "You stopped the robot base movement";

    if(!$sql){
      echo "nothing inserted into table.";
    }
  }

  $dbc->close();

  header('Refresh: 2; URL = robot-base-test.php');
?>
