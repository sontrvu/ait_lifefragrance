<?php
include "../db-connection.php";
session_start();

header('Content-type: application/json');

switch ($_POST['action']) {
  case 'getItems':		
    getItems();
    break;
  
  case 'addItem':
    addItem($_POST['productId'], $_POST['quantity']);
    break;
  
  case 'removeItem':
    removeItem($_POST['productId']);
    break;
  
  case 'checkout':
    checkout();
    break;

  default:
    break;
}

function getItems() {
  global $connection;

  if (!isset($_SESSION["user_id"])) {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
    return;
  }

  $userId = $_SESSION["user_id"];
  $query = "SELECT p.`Id`, p.`Name`, p.`Price`, uc.`Quantity` FROM `usercart` uc 
            JOIN `product` p ON uc.`ProductId` = p.`Id` 
            WHERE `UserId` = '$userId'";
  $results = mysqli_query($connection, $query);
  
  $products = array();
  while ($row = mysqli_fetch_array($results)) {
    $amount = $row["Quantity"] * $row["Price"];
    $products[] = ["id" => $row["Id"], "name" => $row["Name"], "price" => $row["Price"], "quantity" => $row["Quantity"], "amount" => $amount];
  }

  $data = ["isSuccess" => true, "data" => $products];
  echo json_encode($data);

  mysqli_close($connection);
  return;
}


function addItem($productId, $quantity) {
  global $connection;

  if (!isset($_SESSION["user_id"])) {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
    return;
  }

  // Check if item is already in cart
  $userId = $_SESSION["user_id"];
  $query = "SELECT * FROM `usercart` WHERE `ProductId` = '$productId' AND `UserId` = '$userId'";
  $results = mysqli_query($connection, $query);
  
  if (mysqli_num_rows($results) > 0) {
    updateExistingItem($productId, $quantity);
  } else {
    addNewItem($productId, $quantity);
  }
}

function addNewItem($productId, $quantity) {
  global $connection;
  $userId = $_SESSION["user_id"];
  
  $query = "INSERT INTO `usercart` (`UserId`, `ProductId`, `Quantity`) 
            VALUES ('$userId', '$productId', '$quantity')";
  
  if (mysqli_query($connection, $query)) {
    $data = ["isSuccess" => true];
    echo json_encode($data);
  } else {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
  }

  mysqli_close($connection);
}

function updateExistingItem($productId, $quantity) {
  global $connection;
  $userId = $_SESSION["user_id"];
  
  $query = "UPDATE `usercart` SET `Quantity` = `Quantity` + '$quantity'
            WHERE `ProductId` = '$productId' AND `UserId` = '$userId'";
  
  if (mysqli_query($connection, $query)) {
    $data = ["isSuccess" => true];
    echo json_encode($data);
  } else {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
  }

  mysqli_close($connection);
}


function removeItem($productId) {
  global $connection;

  if (!isset($_SESSION["user_id"])) {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
    return;
  }

  $userId = $_SESSION["user_id"];
  $query = "DELETE FROM `usercart` WHERE `UserId` = '$userId' AND `ProductId` = '$productId'";
  
  if (mysqli_query($connection, $query)) {
    $data = ["isSuccess" => true];
    echo json_encode($data);
  } else {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
  }

  mysqli_close($connection);
  return;
}


function checkout() {
  global $connection;

  if (!isset($_SESSION["user_id"])) {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
    return;
  }

  $userId = $_SESSION["user_id"];
  $query = "DELETE FROM `usercart` WHERE `UserId` = '$userId'";
  
  if (mysqli_query($connection, $query)) {
    $data = ["isSuccess" => true];
    echo json_encode($data);
  } else {
    $data = ["isSuccess" => false, "message" => "Something went wrong!"];
    echo json_encode($data);
  }

  mysqli_close($connection);
  return;
}
?>