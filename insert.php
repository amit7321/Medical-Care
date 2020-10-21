<?php
$host  = 'localhost';
$userinfo = 'root';
$password = ''; 
$db = 'healthdb';

//creating connection for my sql
$conn = new mysqli($host,$userinfo,$password,$db);

//checking connection
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
$first=mysqli_real_escape_string($conn,$_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
if(empty($first) || empty($last) || empty($email) || empty($uid)){
	header("Location:SignUp.php?error=emptyfields&first=".$first."&email=".$email."&last=".$last."&uid=".$uid);
	exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
	header("Location:SignUp.php?error=invalidemailuid");
	exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	header("Location:SignUp.php?error=invalidemail&uid=".$uid);
	exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
	header("Location:SignUp.php?error=invaliduid&email=".$email);
	exit();
}
else{
	$sql = "select Username from userinfo where Username=?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location:SignUp.php?error=sqlerror");
		exit();
	}else{
		mysqli_stmt_bind_param($stmt,"s",$uid);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultcheck = mysqli_stmt_num_rows($stmt);
		if($resultcheck>0){
			header("Location:SignUp.php?error=usertaken&email=".$email);
		      exit();
		}
		else{
			$sql = "INSERT INTO userinfo(First_name,Last_name,Email,Username,password) VALUES (?,?,?,?,?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
		              header("Location:SignUp.php?error=sqlerror");
		               exit();
	            }else{
	            	$hashedpwd = password_hash($pass,PASSWORD_DEFAULT);
	            	mysqli_stmt_bind_param($stmt,"sssss",$first,$last,$email,$uid,$hashedpwd);
		            mysqli_stmt_execute($stmt);
		            header("Location:SignUp.php?signup=success");
		            exit();
	            }
		}
	}
}
mysqli_stmt_close($stmt);
mysql_close($conn);

?>