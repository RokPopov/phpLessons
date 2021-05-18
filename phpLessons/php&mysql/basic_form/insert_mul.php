<?php

  $servername = "localhost";
  $username = "root";
  $password = "anticefur3d";
  $dbname = "mywebsite";

  $connection = new mysqli($servername, $username, $password, $dbname);

  if($connection->connect_error) {
    die("Bummer! Connection kaput: " . $connection->connect_error);
  }

  $sql = "INSERT INTO users (id, firstname, lastname, email) VALUES ('31', 'Jenny', 'Hastings', 'jenny@email.com');";
  $sql .= "INSERT INTO users (id, firstname, lastname, email) VALUES ('32', 'Miriam', 'Alfredson', 'miriam@email.com');";
  $sql .= "INSERT INTO users (id, firstname, lastname, email) VALUES ('33', 'Janine', 'Hastings', 'janine@email.com')";

  if ($connection->multi_query($sql) === TRUE) {
    echo "New records created";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

  $connection->close();

 ?>
