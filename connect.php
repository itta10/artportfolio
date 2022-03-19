<?php
$name= $_POST['name'];
$e_mail= $_POST['e_mail'];
$message=$_POST['message'];
$phone=$_POST['phone'];
//DATABASE connection

$conn= new mysqli(' ',' ','','');
if($conn->connect_error){
  die('Connection Failed: ' .$conn->connect_error);
}
else{
  $stmt= $conn->prepare("insert into contactme(name,e_mail,message,phone) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$e_mail,$message,$phone);
$stmt->execute();
echo '<script>alert("Ish Wish")</script>';


$stmt->close();
$conn->close();}
header("Location:thankyou.php");

 ?>
