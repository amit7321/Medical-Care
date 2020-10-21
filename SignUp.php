<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Disease And Curing</title>
    
         
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
       <li class="nav-item login">
        <a class="nav-link" href="Login.php">Login</a>
      </li>  
       <li class="nav-item signup">
        <a class="nav-link" href="Signup.php">Signup</a> 
       </li>
    </ul>
  </div>  
</nav>
<br>
<div class="page-content-wrapper">
     <div class=" big-banner"style="height:600px;padding-top:50px;
     margin-top:25px;">
     <div class="container-fluid">
        
           
       <div class="row SignUp">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"style="margin:0 auto; float:none;">
                  <?php
                       if(isset($_GET['error'])){
                        if($_GET['error']=="emptyfields"){
                          echo '<p class="signuperror">Fill up all feilds</p>';
                        }
                        else if($_GET['error']=="invalidemailuid"){
                          echo '<p class="signuperror">invalid username and email</p>';
                        }
                        else if($_GET['error']=="invaliduid"){
                          echo '<p class="signuperror">invalid username </p>';
                        }
                        else if($_GET['error']=="invalidemail"){
                          echo '<p class="signuperror">invalid email</p>';
                        }
                        else if($_GET['error']=="usertaken"){
                          echo '<p class="signuperror">username already taken</p>';
                        }  
                       } else if($_GET['signup']=="success"){
                            echo '<p class="signupsuccess">you have successfully signed up</p>';
                       }
                  ?>
                  <form action="insert.php" method="POST">
                    <h2 style="color:#fff;">Sign Up</h2>
                      <input type="text"id="username" name="first"placeholder="First name"></br></br>
                      <input type="text"id="username"name="last"placeholder="Last name"></br></br>
                       
                      <input type="text" id="email"name="email"placeholder="Email Address"></br></br>
                      <input type="text"name="uid"placeholder="Username"></br></br>
                      
                      <input type="text"name="pass"placeholder="password"></br></br>
                      
                      <input type="submit" value="Sign Up"></br></br>
                      
                      Already have an account?
                      <a href="Login.php"style="text-decoration:none;">&nbsp;Log In</a>
                  </form>
                       

                 </div>

       </div><!--login-->

              
 
    </div><!--container-->
     </div><!--jumbotron-->         
     </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</body>
</html>