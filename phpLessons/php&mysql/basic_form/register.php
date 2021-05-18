<?php

  $id = val($_POST["id"]);
  $fname = val($_POST["fname"]);
  $lname = val($_POST["lname"]);
  $email = val($_POST["email"]);

  function val($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $servername = "localhost";
  $username = "root";
  $password = "anticefur3d";
  $dbname = "mywebsite";

  $connection = new mysqli($servername, $username, $password, $dbname);

  if($connection->connect_error) {
    die("Bummer! Connection kaput: " . $connection->connect_error);
  }

  $sql = "INSERT INTO users (id, firstname, lastname, email) VALUES ('$id', '$fname', '$lname', '$email')";

  if ($connection->query($sql) === TRUE) {
    echo "You did it. What an achievement. Celebrate.";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

  $connection->close();

 ?>
