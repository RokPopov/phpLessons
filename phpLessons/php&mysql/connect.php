<?php
  $servername = "localhost"; // store the name of the host
  $username = "root";
  $password = "anticefur3d";

  // establish the connection to the database
  $connection = new mysqli($servername, $username, $password);

  // check connection, if not successfull, display error message
  if ($connection->connect_error) {
    die("Bummer! Connection failed: " . $connection->connect_error);
  }

echo "Booom! Connected successfully";

 ?>
