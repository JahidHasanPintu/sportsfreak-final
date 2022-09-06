<?php
include("db.php");
$response = array();
$query = "SELECT * FROM news";
$result_tasks = mysqli_query($conn, $query);
header("content-Type: JSON");
$i=0;
while($row = mysqli_fetch_assoc($result_tasks)) { 
    $response[$i]['id'] = $row['id'];
      $response[$i]['title'] = $row['title']; 
      $response[$i]['description'] = $row['description']; 
      $response[$i]['category'] = $row['category']; 
      $response[$i]['picture'] = $row['picture']; 
      $i++;
}
echo json_encode($response,JSON_PRETTY_PRINT);
?>


<!-- apis links 
http://localhost/sports-freak/admin/getsinglenews.php?id=1


http://localhost/sports-freak/admin/getnews.php -->