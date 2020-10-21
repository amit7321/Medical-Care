<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/Login.css">
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
    </ul>
  </div>  
</nav>
<br>
<?php
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
 $the_big_array = [];
$sql = "select * from persons";
 if ($result=mysqli_query($conn,$sql))
        {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
            {
               // printf ("%s (%s)\n",$row[0],$row[1]);
                $the_big_array[]=$row;
            }
            // Free result set
            mysqli_free_result($result);
        }
	    //close conenction to database
	    mysqli_close($conn);

?>
<h1 class="text-center m-5 ">All Requests </h1>
    <div class="table-responsive" style="height: 300px">
        <table id="table1" class="table table-dark table-striped table-bordered"  >
            <thead>
                <tr>
                	<th scope="col">User_id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Massege</th>
                   
                </tr>
            </thead>
            <tbody>
            	<?php
            $i = 1;
            foreach ($the_big_array as  $value) :
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value[0]; ?></td>
                    <td><?php echo $value[1]; ?></td>
                    <td><?php echo $value[2]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                   
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </div><!--jumbotron-->
</body>
</html>