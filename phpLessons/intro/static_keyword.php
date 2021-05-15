<!DOCTYPE html>
<html>
<body>

  <?php

  /*
  When a statement is executed inside of the function, all the variables
  and corresponding variable values are deleted. In certain situations, we
  want the local variables to retain their value so they can be used elsewhere.
  To do so, use the 'static' keyword when declaring the variable.
  */
  function test1() {
    static $x = 10; // declaring a static variable and giving it an initial value
    echo $x; // output the value of x
    $x++; // increment the value of x by 1 every time the function is executed
  }
  echo "<br>";
  test1();
  echo "<hr />";
  test1();
  echo "<hr />";
  test1();
  echo "<hr />";
  test1();
  ?>

</body>
</html>
