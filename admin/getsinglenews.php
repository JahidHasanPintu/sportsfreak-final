<?php
include("db.php");
$response = array();
if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM news WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        header("content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)) { 
            $response[$i]['id'] = $row['id'];
              $response[$i]['title'] = $row['title']; 
              $response[$i]['description'] = $row['description']; 
              $response[$i]['category'] = $row['category']; 
              $response[$i]['picture'] = $row['picture']; 
              $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
  }
// $query = "SELECT * FROM news";
// $result_tasks = mysqli_query($conn, $query);
// header("content-Type: JSON");
// $i=0;
// while($row = mysqli_fetch_assoc($result_tasks)) { 
//     $response[$i]['id'] = $row['id'];
//       $response[$i]['title'] = $row['title']; 
//       $response[$i]['description'] = $row['description']; 
//       $response[$i]['category'] = $row['category']; 
//       $response[$i]['picture'] = $row['picture']; 
//       $i++;
// }
// echo json_encode($response,JSON_PRETTY_PRINT);
?>