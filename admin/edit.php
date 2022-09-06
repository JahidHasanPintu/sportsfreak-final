<?php
include("db.php");
$title = '';
$category ='';
$picture = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM news WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $category = $row['category'];
    $picture = $row['picture'];
    $description = $row['description'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $category= $_POST['category'];
  $picture= $_POST['picture'];
  $description = $_POST['description'];

  $query = "UPDATE news set title = '$title',category = '$category',picture = '$picture', description = '$description' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'News Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location:home.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
          <input name="category" type="text" class="form-control" value="<?php echo $category; ?>" placeholder="Update category">
        </div>
        <div class="form-group">
          <input name="picture" type="text" class="form-control" value="<?php echo $picture; ?>" placeholder="Update picture">
        </div>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
