<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "work_shop_login_php"; // ชื่อฐานข้อมูล
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>