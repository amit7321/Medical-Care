<?php
session_start();



$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Subject is required</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Message is required</label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }

 if($error == '')
 {
  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 2;
  }
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'subject' => $subject,
   'message' => $message
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for contacting us</label>';
  $name = '';
  $email = '';
  $subject = '';
  $message = '';
 }
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/.css">

    <title>Contact Form</title>
	
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
        <li class="nav-item">
        <a class="nav-link" href="service page (before login).php"> Services </a>    
      </li> 
        <?php
            if(isset($_SESSION['user_id'])){
              echo ' <form action ="Logout.php"method="POST">
              <li class="nav-item logout">
        <a class="nav-link" href="Logout.php"><button type="submit">Logout</button></a>
      </li> </form> ';
            }else{
              echo '<li class="nav-item login">
        <a class="nav-link" href="Login.php"><button type="submit">Login</button></a>
      </li>  
       <li class="nav-item signup">
        <a class="nav-link" href="Signup.php"><button type="submit">Signup</button></a>
      </li> ';
            }
        ?>
         
     
        
    </ul>
  </div>  
</nav>

<br>
         <?php
         if (isset($_SESSION['user_id'])) {
               # code...
             echo '<div class="container">
          <h2 align="center">Contact Form</h2>
          <br/>
               <div class="row">
                   <div class="col-md-6" style="margin:0 auto; float:none;">
                     <form class="contact-form " action="Contacttodb.php"method="post">
                      <?php echo $error;?>
                          <div class="form-group">
                               <label>Enter name</label>
                               <input type="text"name="name"placeholder="Enter Name" class="form-control"
                               vlaue = "<?php echo $name;?>"/>

                          </div>
                           <div class="form-group">
                               <label>Enter Email</label>
                               <input type="text"name="email"placeholder="Enter Email" class="form-control"
                                vlaue = "<?php echo $email;?>"/>
                          </div>
                           <div class="form-group">
                               <label>subject</label>
                               <input type="text"name="subject"placeholder="subject" class="form-control"
                                vlaue = "<?php echo $subject;?>"/>
                          </div>
                          <div class="form-group">
                               <label>message</label>
                               <textarea name="message"placeholder="Enter Messege" class="form-control">
                               </textarea>
                          </div>
                          <div class="form-group" align="center">
                               
                               <input type="submit"name="submit"value="submit" class="btn btn-info"/>
                          </div>
                     </form>
                   </div>
               </div>
        </div>';
          }else{
                echo '<p class="mt-5 login-status">You are logged out!</p>';
           }
         ?>
        

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>