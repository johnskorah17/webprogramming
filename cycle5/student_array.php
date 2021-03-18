<html>
<title>student array</title>
<body>

<?php
$name=array("tom","jinse","jose");

$name1=array("Sumit","Anandhu","vishnu");
echo "<h2>Array is</h2>";
print_r($name);
print_r($name1);
asort($name);
arsort($name1);

echo "<h2>Ascending Order</h2>";
foreach($name as $name_array)
   {
   echo  $name_array;
   echo "<br>";
   }
   echo "<h2>Descending Order</h2>";
foreach($name1 as $name1_array)
   {
   echo  $name1_array;
   echo "<br>";
   }
?>

</body>
</html>