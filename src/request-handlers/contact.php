<?php
include "../db-connection.php";
session_start();

header('Content-type: application/json');

switch ($_POST['action']) {
  case 'sendFeedback':		
    sendFeedback($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['message']);
    break;

  default:
    break;
}

function sendFeedback($fullName, $email, $phone, $message) {
  global $connection;
  $userId = $_SESSION["user_id"];
  
  $query = "INSERT INTO `feedback` (`FullName`, `Email`, `Phone`, `Message`) 
            VALUES ('$fullName', '$email', '$phone', '$message');";
  
  if (mysqli_query($connection, $query)) {
    $data = ["isSuccess" => true];
    echo json_encode($data);
  } else {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
  }

  mysqli_close($connection);
}
?>