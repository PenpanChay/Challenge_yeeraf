<!DOCTYPE html>
<html>
<body>

<?php
$nums = array(3, 1, 2, 3);
$sums = 6;
$output = "";

for ($x = 0; $x < count($nums)-1; $x++)  {
for ($y = $x+1; $y < count($nums); $y++)  {
if($nums[$x] + $nums[$y] == $sums){
  $output = "$x,$y";
  echo "$output";
} 
}}
if($output == "") {
  echo "no output ";
}

?>

</body>
</html>