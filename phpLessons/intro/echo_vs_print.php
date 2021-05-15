<!DOCTYPE html>
<html>
<body>
<?php
  // BASIC OUTPUT USING ECHO
  echo "<h1>Test header 1</h1>";
  echo "Sample paragraph 1 <br>";
  // Echo allows multiple parameters  - print does not
  // Echo also fires statements slightly faster than print
  echo "This ", "string ", "has ", "multiple parameters ";
  echo "<hr />";

  // OUTPUT VARIABLES ECHO
  $txt1 = "Sample Text 1";
  $txt2 = "Soccer";
  $x = 20;
  $y = 30;

  echo "<h2>" . $txt1 . "</h2>";
  echo "I like " . $txt2 . "<br>";
  echo $x + $y;

  // BASIC OUTPUT USING PRINT
  print "<h1>Test header 2</h1>";
  print "Sample paragraph 2 <br>";
  print "<hr />";

  //OUTPUT VARIABLES USING PRINT
  $txt1 = "Sample text 1";
  $txt2 = "Sample text 2";
  $x = 40;
  $y = 50;

  print "<h2>" . $txt2 . "</h2>";
  print "I like " . $txt1 . "<br>";
  print $x + $y;

 ?>


</body>
</html>
