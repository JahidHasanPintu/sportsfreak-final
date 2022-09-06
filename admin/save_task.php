<?php

include('db.php');
// session_start();
// if (!isset($_SESSION['username'])) {
//   header("Location: index.php");
// }

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $category = $_POST['category'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  $query = "INSERT INTO news(title,category,picture, description) VALUES ('$title','$category','$image', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'News upload Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: home.php');

}

?>
