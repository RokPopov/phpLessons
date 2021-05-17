<?php
  $servername = "localhost";
  $username = "root";
  $password = "anticefur3d";
  $dbname = "mywebsite";

  // create connection
  $conn = new mysqli($servername, $username, $password, $dbname);


  //check connection
  if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM users ORDER BY firstname, lastname;";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
      // output data of each row
      echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " "
      . $row["lastname"]. " - " . $row["email"]. "<br>";
    }
      } else {
      echo "0 results";
    }


  $conn->close();
 ?>
