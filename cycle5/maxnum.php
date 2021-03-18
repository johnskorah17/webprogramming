<html>
<body>
<title> max out of three </title>
</body>
</html>
<?php
$x=6;
$y=4;
$z=2;
if($x > $y)
{
if($x > $z)
echo "maximum num x=$x";
else
echo "maximum num z=$z";
}
else
{
if($z > $y)
echo "maximum num z=$z";
else
echo "maximum num y=$y";
}
?>
</body>
</html>