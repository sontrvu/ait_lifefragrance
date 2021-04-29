<?php
include "../db-connection.php";
session_start();

header('Content-type: application/json');

switch ($_POST['action']) {
  case 'searchItems':		
    searchItems($_POST['keyword']);
    break;

  default:
    break;
}

function searchItems($keyword) {
  global $connection;

  $query = "SELECT * FROM `product` WHERE `Name` LIKE '%$keyword%'";
  $results = mysqli_query($connection, $query);
  
  $products = array();
  while ($row = mysqli_fetch_array($results)) {
    $products[] = [ "id" => $row["Id"], 
                    "name" => $row["Name"], 
                    "description" => $row["Description"], 
                    "price" => $row["Price"], 
                    "imagePath" => $row["ImagePath"]
                  ];
  }

  $data = ["isSuccess" => true, "data" => $products];
  echo json_encode($data);

  mysqli_close($connection);
  return;
}
?>