<html>
<head>
</head>
<body>
<form method="post" action="students.php" >
name<input type="text" name="name"><br><br>

branch<input type="text" name="branch"><br><br>

mark<input type="text" name="mark"><br><br>

<input type="submit" value="submit">

<?php
$con=mysqli_connect

("localhost","20mca031","2554","20mca031");
if($con)
{

echo $name=$_POST["name"];
echo $branch=$_POST["branch"];
echo $mark=$_POST["mark"];

$qry="INSERT INTO students(name,branch,mark) VALUES

('$name','$branch','$mark')";

if(mysqli_query($con, $qry))
{
echo "";
}
}
?>
</body>
</html>

