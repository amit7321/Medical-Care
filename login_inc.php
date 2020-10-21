<?php

if(isset($_POST['login_submit'])){
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
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   if(empty( $email)||empty($pass)){
      header("Location:AboutUs.php?error=emptyfields");
	exit();
   }
   else{
   	$sql = "select*from userinfo where Email=? or Username=?";
   	$stmt = mysqli_stmt_init($conn);
   	if(!mysqli_stmt_prepare($stmt,$sql)){
		 header("Location:AboutUs.php?error=sqlerror");
		 exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"ss",$email,$email);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if($row = mysqli_fetch_assoc($result)){
			$pwdcheck = password_verify($pass,$row['password']);
			if($pwdcheck == false){
                    header("Location:AboutUs.php?error=wrongpass");
	              exit();
			}else if($pwdcheck == true){
                     session_start();
                     $_SESSION['user_id'] = $row['user_id'];
                      $_SESSION['Email'] = $row['Email'];
                      $_SESSION['Username'] = $row['Username'];
                      header("Location:AboutUs.php?login=success");
                      exit();
                     
			}else{
				header("Location:AboutUs.php?error=worngpass");
	                   exit();
			}
		}
	}
   }
}else{
	header("Location:AboutUs.php");
	exit();
}
?>