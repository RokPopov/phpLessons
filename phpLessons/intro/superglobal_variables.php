<!DOCTYPE html>
<html>
<body>

    <?php
    // GLOBAL VARIABLE
    echo "<br>";
    $x = 20;
    $y = 30;

    function add() {
      $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z;

    // OTHER SUPERGLOBALS
    echo "<hr />";

    echo $_SERVER['PHP_SELF']; // stores info about headers and script locations
    echo "<hr />";
    echo $_SERVER['SERVER_NAME']; // stores the name of the server
    echo "<hr />";

    // other superglobals: $_REQUEST, $_POST, $_GET, etc.

      ?>

</body>
</html>
