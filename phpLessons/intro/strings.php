<!DOCTYPE html>
<html>
<head>
  <title>Explore commonly used functions that apply specifically to strings</title>
</head>
<body>
  <?php
  // WORD COUNT
  echo "<br>";
  echo str_word_count("Hello Popce");
  echo "<hr />";

  // REVERSE WORDS
  echo strrev("Hello Popce!"); // outputs !ecpoP olleH
  echo "<hr />";

  // SEARCH FOR A TEXT INSIDE A STRING
  echo strpos("Hello Popce", "Popce"); // outputs 6
  echo "<hr />";

  // REPLACE TEXT INSIDE A STRING
  echo str_replace("world", "Development", "Hello TechSupport!"); // outputs Hello Development!
  echo "<hr />";

  ?>

</body>
</html>
