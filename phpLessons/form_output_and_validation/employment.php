<!DOCTYPE html>
<html>

  <head>
    <title>PHP Form</title>
    <meta charset="utf-8">
  </head>

<body>
<!-- 1. Display user form input on the same page as the form / basic validation -->
<!-- 2. Pass variables through PHPs htmlspecialchars() functions to make sure data is transmitted securely -->
<!-- 3. Use the trim() function to strip any unnecessary chars inserted into the input fields -->
<!-- 4. Use the striplashes() function to remove any backslashes from user input data - adds another layer of security, protects data integrity -->

  <?php
  // define the variables used to contain the inputted form data
  // set each variable to default empty value
    $name = $website = $position = $experience = $estatus = $comments = "";

  // check whether the user submitted the form with server request method
  if ($_SERVER["REQUEST_METHOD"] == "POST") { // check if data had been posted - can only be posted if user clicked 'Submit' button
    // if the form has been posted, those variables will take new values:
    $name = val($_POST["name"]); // each variable is validated with val(); using 3 validation techniques
    $website = val($_POST["website"]);
    $position = val($_POST["position"]);
    $experience = val($_POST["experience"]);
    $estatus = val($_POST["estatus"]);
    $comments = val($_POST["comments"]);
  }


  // validate the inputted data
    function val($data) {
      $data = trim($data); // trim the data to remove any unnecessary spaces
      $data = stripslashes($data); // remove unnecessary backslashes
      $data = htmlspecialchars($data); // secure the data with using htmlspecialchars
      return $data; // return the inputted data
    }

   ?>

<form name="employment" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
  <!-- global variable server will send data to the same file["PHP_SELF"] as the existing file -->
  <!-- htmspecialchars(); prevents injecting any JS malicious code into transmitted data -->
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
      <td><input type="text" name="website" maxLength="50" /></td>
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
