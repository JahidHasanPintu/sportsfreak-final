<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sportsfreak'
) or die(mysqli_erro($mysqli));

?>
