<?php
$name= $_POST['name'];
$e_mail= $_POST['e_mail'];
$message=$_POST['message'];
//DATABASE connection

$conn= new mysqli('localhost','root','','artportfolio');
if($conn->connect_error){
  die('Connection Failed: ' .$conn->connect_error);
}
else{
  $stmt= $conn->prepare("insert into contactme(name,e_mail,message) values(?,?,?)");
$stmt->bind_param("sss",$name,$e_mail,$message);
$stmt->execute();
echo '<script>alert("Ish Wish")</script>';




$stmt->close();
$conn->close();}
header("Location:thankyou.php");

 ?>
