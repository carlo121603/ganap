<?php
include "db_Connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $name = $_POST['NAME'];
  $section =  $_POST['section'];
  $name = $_POST['NAME'];


  $section =  $_POST['section'];
  $name = $_POST['NAME'];
  $section =  $_POST['section'];


  $stmt = $conn->prepare("INSERT INTO user_test (name, section) VALUES (?, ?)");
  $stmt -> bind_param("ss", $name, $section);
  
  if ($stmt -> execute()) {
    echo "Record inserted successfully";
  }else{
    echo "Error inserting record";
  }
}
