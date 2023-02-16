<!DOCTYPE html>
<html>
<body>

<?php  
for ($x=1; $x<=100; $x++) {
if ($x%3 == 0 && $x%5 == 0) {
  echo "ThreeFive <br>";
}
else if ($x%3 == 0) {
  echo "Three <br>";
}
else if ($x%5 == 0) {
  echo "Five <br>";
} else
{
  echo "$x <br>";
  }
}
?>  

</body>
</html>
