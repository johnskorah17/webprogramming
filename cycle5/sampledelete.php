<?php
$con=mysqli_connect("localhost","20mca031","2554","20mca031");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>
