<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";

$connection = new mysqli($servername, $username, $password, $database);

// Tạo bảng với foreign key
$sql = "CREATE TABLE orders (
  order_id INT PRIMARY KEY,
  id INT,
  FOREIGN KEY (id) REFERENCES (id)
)";

$sql = "SELECT * 
        FROM clients p 
        JOIN orders c ON p.order_id = c.id";

$result = mysqli_query($conn, $sql);

// Hiển thị dữ liệu
while($row = mysqli_fetch_assoc($result)) {
  echo $row['name']; 
  echo $row['order_name']; 
}

mysqli_query($connection, $sql);

?>