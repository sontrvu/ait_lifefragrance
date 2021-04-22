<?php
include "../db-connection.php";
session_start();

header('Content-type: application/json');

switch ($_POST['action']) {
  case 'login':		
    login($_POST['email'], $_POST['password']);
    break;
  
  case 'logout':
    logout();
    break;
  
  case 'register':
    register($_POST['email'], $_POST['password'], $_POST['firstName'], $_POST['lastName']);
    break;

  default:
    break;
}

function login($email, $pwd) {
  global $connection;
  $inputsAreValid = true;

  if (empty($email) || empty($pwd)) {
    $inputsAreValid = false;
  }

  // More validation

  if ($inputsAreValid) {
    $query = "SELECT * FROM `user` WHERE `Email` = '$email'LIMIT 1";
    $results = mysqli_query($connection, $query);  
    $row = mysqli_fetch_array($results);
    
    if (isset($row) && password_verify($pwd, $row["Password"])) {
      $_SESSION["user_email"] = $row["Email"];
      $_SESSION["user_fullname"] = $row["FirstName"] . " " . $row["LastName"];
  
      $data = ["isSuccess" => true];
      echo json_encode($data);

      mysqli_close($connection);
      return;
    }
  }

  $data = ["isSuccess" => false, "message" => "Username or email are incorrect"];
  echo json_encode($data);
  
  mysqli_close($connection);
}


function logout() {
  session_unset();
  session_destroy();

  $data = [ "isSuccess" => true ];
  echo json_encode($data);
}


function register($email, $pwd, $fname, $lname) {
  global $connection;
  $inputsAreValid = true;

  if (empty($email) || empty($pwd) || empty($fname) || empty($lname)) {
    $inputsAreValid = false;
  }

  // More validation

  if ($inputsAreValid) {
    $query = "SELECT * FROM `user` WHERE `Email` = '$email' LIMIT 1";
    $results = mysqli_query($connection, $query);
    
    if (mysqli_num_rows($results) > 0) {
      $data = ["isSuccess" => false, "message" => "This email has already been used"];
      echo json_encode($data);

      mysqli_close($connection);
      return;
    }

    // Pass all
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
		$query = "INSERT INTO `user` (`Email`, `Password`, `FirstName`, `LastName`) 
              VALUES ('$email','$hashedPwd','$fname', '$lname')";
              
    if (mysqli_query($connection, $query)) {
      login($email, $pwd);
      return;
    } 
  }

  $data = ["isSuccess" => false, "message" => "Something went wrong! Please try again"];
  echo json_encode($data);

  mysqli_close($connection);
}
?>