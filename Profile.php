<?php
   session_start();
   echo $_SESSION['Email'];
?>
<html>
<head>
	<title><?php echo $first;?><?php echo $last;?>s profile</title>
	 <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Health +</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<?php
  
   if(isset($_SESSION['Email'])){
   	$email = $_SESSION['Email'];
   	//echo $email;

   	$conn = mysqli_connect('localhost','root','','healthdb');
      if(!$conn){
        echo 'Connection error ' . mysqli_connect_error();
      }

      $sql = "SELECT * FROM userinfo where Email = '$email'";
	    // make query and get result
	    $result = mysqli_query($conn, $sql);

	    //fetch the resulting rows as array
	    $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

	    //free result from memory
	    mysqli_free_result($result);

	    //close conenction to database
	    mysqli_close($conn);

	    //print_r($resultArray);

	    $profileInfo = $resultArray[0];
   

   	// mysql_connect("localhost","root","", "healthdb") or die("counld not connect to the server");
   	// mysql_select_db("healthdb") or die("That database could not found");
   	// $userquery = mysql_query("SELECT * FROM userinfo where Email='$email'")or die("The query is not completed. Please try again");
   	// if(mysql_num_rows($userquery)!=1){
   	// 	die("The database could not be found");
   	// }
   	// while($row=mysql_fetch_array($userquery,MYSQL_ASSOC)){
    //    $first=$row['First_name'];
    //    $last=$row['Last_name'];
    //    $email=$row['Email'];
    //    $uid=$row['Username'];
    //    $pass=$row['password'];
   	// }
   	// if($email !=$email){
   	// 	die("There has been a fetal error. Please try again");
   	// }
   	?>
   	<div class="big-banner"style="height:600px;padding-top:50px;
     margin-top:25px;">
   <div class="profile">
   <h2><?php echo $profileInfo['First_name'];?>'s profile</h2><br/>
   <table>
     <tr><td>firstname:</td><td><?php echo $profileInfo['First_name']; ?><td><a href="Firstedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr><br/><br/><br/><br/> 
     <tr><td>Lastname:</td><td><?php echo $profileInfo['Last_name'];?><td><a href="Lastedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     <tr><td>Email:</td><td><?php echo $profileInfo['Email'];?><td><a href="Emailedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     <tr><td>Username:</td><td><?php echo $profileInfo['Username'];?><td><a href="Usernameedit.php"><input type="button" name="edit" value="Edit"></a></td></td></tr>
     
   </table>
   </div>
   </div>
<?php
   }else die("You need to specify your email!");
?>
</body>
</html>
