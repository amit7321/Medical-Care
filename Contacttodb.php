<?php
session_start();
$host  = 'localhost';
$persons = 'root';
$password = ''; 
$db = 'healthdb';

//creating connection for my sql
$conn = new mysqli($host,$persons,$password,$db);

//checking connection
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$subject=mysqli_real_escape_string($conn,$_POST['subject']);
$message=mysqli_real_escape_string($conn,$_POST['message']);
$Email =  $_SESSION['Email'];

$res = strcmp($email,$Email);
if($res== 0 ){
	$sql = "INSERT INTO persons(Name,Email,Subject,Message) VALUES ('$name','$email','$subject','$message')";
      mysqli_query($conn,$sql);
      header("Location:Contact.php?contactsuccess");
}else{
	 echo '<p class="mt-5 login-status">You need to give your sign in email!</p>';
	 header("Location:Contact.php?contactunsuccess".$Email);
}


?>