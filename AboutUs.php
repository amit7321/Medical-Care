<?php
 session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/AboutUS.css">

    <title>Disease And Curing</title>
</head>
<body>

    

 <nav class="navbar navbar-expand-lg navbar-light  ">
      <div class="container">

    <a class="navbar-brand" href="#"> Health Care  </a>


    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#">Help Desk </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Service </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Appointment</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#"> Call </a> 
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="#"> 015212123 </a> 
      </li>
    </ul>
  </div>
</div>
</nav>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
 

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> 
          <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php"> About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service page (before login).php"> Services </a>    
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Contact.php"> Contact</a>
      </li>
       <?php
            if(isset($_SESSION['user_id'])){
              echo ' <form action ="Logout.php"method="POST">
              <li class="nav-item logout">
                 <a class="nav-link" href="Logout.php"><button type="submit">Logout</button></a>
              </li> 
               
              </form> 
              <li class="nav-item signup">
                   <a class="nav-link" href="Profile.php"><button type="submit">View</button></a>
               </li> ';
            }else{
              echo '<li class="nav-item login">
        <a class="nav-link" href="Login.php"><button type="submit">Login</button></a>
      </li>  
       <li class="nav-item signup">
        <a class="nav-link" href="Signup.php"><button type="submit">Signup</button></a>
      </li>  ';
            }
        ?>
         
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>


           
                  
                   <div class="container">
             <div class="row img">
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                 
                       <img src="images/login.jpg" class="backimg">
                 </div>
                      <div class="col-md-12 col-lg-12 col-xs-12 few">
                          <h2>A few words about us</h2>
                          <p id="choose">TOO CHOOSE FROM</p>
                      </div>

             </div><!--img-->
              </div><!--container-->

             <div class="container">
                      <div class="row divider">
                <div class="col-md-4 col-xs-12">
                       <h3>Health<span>+</span></h3>
                       <p><span style="font-weight:bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem max imus mauris.</span></p>
                       <p>Aenean sit amet leo id enim dapibus eleifend. Phas ellus ut erat dapibus, tempor sapien non, porta.</p>
                </div>
                 <div class="col-md-4 col-xs-12">
                      <p> Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
                </div>
                 <div class="col-md-4 col-xs-12">
                       <img src="images/serving.jpg"class="img-responsive">
                </div>
             </div><!--divider-->
             </div>
             
             
   
  
  <div class="container">
    
              <div class=" jumbotron">
                    
             <div class="row align-iteams-center makingappointment">
              <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                      <h2>Make an appointment with one of our professional Doctors.   </h2>
                     
                    Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.
                    
                   </div>
              </div>
              <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                      <button type="button" class="btn btn-primary">Call Now</button> 
              </div>
                
             </div>
              </div><!--jumbotron-->

              <div class="row doctors">
                      
                      <div class="col-md-12">
                          <h2 id="doctor">Our Doctors</h2>
                      <p id="From">Too Choose From</p>
                      </div>
                      <div class="col-md-12 col-lg-6 col-sm-12 col-sm-12">
                          <img src="images/amit.jpg">
                          <p id="amit"><a href="#">Amit Hasan</a></p>
                      </div>
                       <div class="col-md-12 col-lg-6 col-sm-12 col-sm-12">
                          <img src="images/Jabed.jpg">
                          <p id="amit"><a href="#">Md. Zobaidul Islam Jabed</a></p>
                      </div>

              </div><!--doctors-->
                 
                </div><!--container-->';
                 
   <div class="footer">
   <div class="footer-text"> 

    <h3> Health Care </h3>
    <h2> Opening Hours </h2> 
    <div>    Monday – Thursday
         8.00 – 19.00
           Friday
        8.00 - 18.30
          Saturday
        9.30 – 17.00
           Sunday
         9.30 – 15.00
    </div>

  </div>


</div>

             
        
    <!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holly guacomole!</strong>
      you should check in on some of thoes fields below.
      <button type="button"class="close" data-dismiss="alert" aria-lebel="close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>-->
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>