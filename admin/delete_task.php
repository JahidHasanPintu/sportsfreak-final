<?php

include("db.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM news WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'News Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: home.php');
}

?>
