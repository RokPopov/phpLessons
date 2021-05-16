<!DOCTYPE html>
<html>

  <head>
    <title>PHP Form</title>
    <meta charset="utf-8">
  </head>

<body>
<!-- Display user form input on the same page as the form / basic validation -->
<!-- Pass variables through PHPs htmlspecialchars() functions to make sure data is transmitted securely -->
<!-- Use the trim() function to strip any unnecessary chars inserted into the input fields -->
<!-- Use the striplashes() function to remove any backslashes from user input data - adds another layer of security, protects data integrity -->


<form name="employment" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
  <table width="600" border="0" cellpadding="1">
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
          <option value="Accountant">Accountant</option>
          <option value="Receptionist">Receptionist</option>
          <option value="Administrator">Administrator</option>
          <option value="Supervisor">Supervisor</option>
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
      <td>Additional Comments</td>
        <td>
          <textarea name="comments" cols="45" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="sumbit" name="submit" value="Submit" />
          <input type="reset" name="reset" value="Reset" />
        </td>
    </tr>

  </table>
</form>
</body>
</html>
