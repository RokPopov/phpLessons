<?php

  $id = val($_POST["id"]); // TODO figure out how to add auto-incerement to the id column of users table after the table is created
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
    $last_id = $connection->insert_id;
    echo "You did it. What an achievement. Celebrate. Your record ID is: " . $last_id; // TODO currenctly it gives a value 0 because the previous query was not auto-incremented
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }

  $connection->close();

 ?>
