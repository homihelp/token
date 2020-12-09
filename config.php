<?php
  $servername = "localhost:3306";
  $username = "admin_homihelp";
  $password = "_0Pps93b";
  $database = "admin_homihelp";

  
$con=mysqli_connect($servername,$username, $password,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// ...some PHP code for database "my_db"...



// ...some PHP code for database "test"...


?>
