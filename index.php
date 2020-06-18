<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$insert = false;
if(isset($_POST['name']))
{
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

/*
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/
$name = $_POST['name'];
$age = $_POST['age'];
$gen = $_POST['gender'];
$email = $_POST['email'];
$phno = $_POST['phone'];
$desc = $_POST['desc'];
$sql ="INSERT INTO `colg`.`stu` (`name`, `age`, `gender`, `email`, `phone`, `desc`,`date`) VALUES ( '$name', '$age', '$gen', '$email', '$phno', '$desc',current_timestamp());";
  
if($conn->query($sql) == true)
{
  print "<h3> Thank you wait for confirmation </h3>";
  
  $insert = true;
}
else
  echo "ERROR :  $sql <br> $conn->error";

$conn->close();
}
?>
<h2>Do you want to add your friend than click <a href="index.html">here</a> </h2>
  
</body>
</html>


