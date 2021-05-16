<!DOCTYPE html>
<html>
<body>
<h2> Sorting Arrays </h2>
<!-- PHP offers different methods of sorting the elements in the arrays -->

  <?php

  // SORT

$names = array("Remy", "Zac", "Gabri", "Simone", "Daan", "Ata", "Ankit", "Niels"); // array with 8 values
sort($names); // sort each value in an array alphabetically, works for numerical values as well

$nlen = count($names);
for($i = 0; $i < $nlen; $i++) { // for-loop to output each value in the array
  echo $names[$i];
  echo "<br>";
}

echo "<hr />";

// RSORT
$rnames = array("Remy", "Zac", "Gabri", "Simone", "Daan", "Ata", "Ankit", "Niels"); // array with 8 values
rsort($rnames); // sort each value in an array alphabetically in the reverse order, also num values

$rnlen = count($rnames);
for($i = 0; $i < $rnlen; $i++) { // for-loop to output each value in the array
  echo $rnames[$i];
  echo "<br>";
}

echo "<hr ./>";


// ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
$tscore = array("Remy" => "50", "Zac" => "60", "Gabri" => "75", "Simone" => "65");
asort($tscore); // sort the elements in associative array in ascending order by their Value

foreach($tscore as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<hr />";

 // KSORT - sort by Key
 $kscore = array("Remy" => "50", "Zac" => "60", "Gabri" => "75", "Simone" => "65");
 ksort($kscore); // sort by Key rather than Value

 foreach($kscore as $i => $i_value) {
   echo "Key=" . $i . ", Value=" . $i_value;
   echo "<br>";
 }

 echo "<hr />";

 // KRSORT - sort according to Value in descending order
 $krscore = array("Remy" => "50", "Zac" => "60", "Gabri" => "75", "Simone" => "65");
 krsort($krscore); // sort according to Value in descending order

 foreach($krscore as $i => $i_value) {
   echo "Key=" . $i . ", Value=" . $i_value;
   echo "<br>";
 }

 echo "<hr />";

 // ARSORT - sort according to Key in descending order
 $arscore = array("Remy" => "50", "Zac" => "60", "Gabri" => "75", "Simone" => "65");
 arsort($arscore); // sort according to Key in descending order

 foreach($arscore as $i => $i_value) {
   echo "Key=" . $i . ", Value=" . $i_value;
   echo "<br>";
 }

   ?>

</body>
</html>
