<!DOCTYPE html>
<html>

  <head>
    <title>PHP Form</title>
    <meta charset="utf-8">
    <style>
      .error {
        color: "red";
      }
    </style>
  </head>

<body>
  <!-- if the any of the required fields are submitted empty, an error message should be displayed -->
  <!-- output the data only if required fields are not submitted empty -->



  <?php
    $name = $website = $position = $experience = $estatus = $comments = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    if (empty($_POST["name"])) {
      echo "<span class=\"error\">Error: First Name is Required</span>";
    } else if (empty($_POST["website"])) {
      echo "<span class=\"error\">Error: Website is Required</span>";
    } else {
    $name = val($_POST["name"]);
    $website = val($_POST["website"]);
    $position = val($_POST["position"]);
    $experience = val($_POST["experience"]);
    $estatus = val($_POST["estatus"]);
    $comments = val($_POST["comments"]);
    }
  }


    function val($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

   ?>

<form name="employment" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
  <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h2>Employment Application</h2></td>
      <td></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="name" maxLength="50" /></td>
    </tr>
    <tr>
      <td>Website</td>
      <td><input type="text" name="website" maxLength="50" /></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>
        <select name="position">
          <option value="Tech Support Engineer">Tech Support Engineer</option>
          <option value="Frontend Developer">Frontend Developer</option>
          <option value="Backend Developer">Backend Developer</option>
          <option value="Fullstack Developer">Fullstack Developer</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Experience level</td>
      <td>
        <select name="experience">
          <option value="Entry Level">Entry Level</option>
          <option value="Medior Level">Medior Level</option>
          <option value="Senior Level">Senior Level</option>
      </td>
    </tr>
    <tr>
      <td>Employment Status</td>
      <td>
        <input type="radio" name="estatus" value="Employed" checked />Employed
        <input type="radio" name="estatus" value="Unemployed" />Unemployed
        <input type="radio" name="estatus" value="Student" />Student
      </td>
    </tr>
    <tr>
      <td>Additional Comments</td>
        <td>
          <textarea name="comments" cols="45" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="submit" value="Submit" />
          <input type="reset" name="reset" value="Reset" />
        </td>
    </tr>

  </table>
</form>

<?php
  echo "<h2>User Input:</h2>";
  echo "Name: " . $name;
  echo "<br>";
  echo "Website: " . $website;
  echo "<br>";
  echo "Position: " . $position;
  echo "<br>";
  echo "Experience: " . $experience;
  echo "<br>";
  echo "Employment Status: " . $estatus;
  echo "<br>";
  echo "Comments: " . $comments;

 ?>

</body>
</html>
