<?php
  include __DIR__ . '/../database.php';
  
  if(empty($_GET['id'])) {
    die('ID non esistente');
  }

  $roomId = $_GET['id'];

  $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";

  $result = $conn->query($sql);

  if($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
  } 
  elseif ($result) {
    echo 'No results';
  }
  else {
    echo 'Query error';
  }

  $conn->close();
