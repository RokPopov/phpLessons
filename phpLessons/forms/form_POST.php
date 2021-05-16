<!DOCTYPE html>
<html>
<body>

  <h2> Forms </h2>
<!-- How to process html form data using php (insert into database, validate users or perform actions) -->
  <?php
  /*
  - php form validation is done on the server, it is the safest way - JS can be turned off by the user, PHP cannot
  - POST & GET - data is transmitted in an array that is automatically generated

  GET:
  - passes array variables through URL parameters
  - should only be used for sending non-sensitive data
  - never send pwd through GET
  - all variables displayed openly in an URL
  - GET method has limits how much information can be send
  - current limit is 2000 characters

  POST:
  - passes variables using the Http POST method
  - much more secure, variables not displayed in the URL
  - information invisible to others because it is embedded within the body of the HTTP request
  - no limits as to the amount of information we can send
  - preferred method by developers
  */
  ?>

  <form action="send_POST.php" method="post">
    First Name: <input type="text" name="firstName"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>


</body>
</html>
