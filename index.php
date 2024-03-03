<?php
$registered = 0; // Variable to check success or failure
$userexist = 0; // Variable to check if the user already exists

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check if request method is POST

    include 'server.php'; // Include file containing database connection details
    $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $phno=$_POST['phno'];
   

    // Construct SQL query to select records from 'data' table where the name matches the submitted name
    $sql = "SELECT * FROM data WHERE email='$email'";

    // Execute the SQL query
    $result = mysqli_query($con, $sql);

    // Check if the query was successful
    if ($result) {
        // Get the number of rows returned by the query
        $num = mysqli_num_rows($result);

        // Check if the number of rows is greater than 0
        if ($num > 0) {
            echo 'User already exists';
            $userexist = 1;
        } else {
            // User does not exist, so insert a new record into the 'data' table
            $sql = "INSERT INTO data (name, password,email,gender,phno) VALUES ('$name', '$password','$email' , '$gender' , '$phno' )";

            // Execute the insertion query
            $result = mysqli_query($con, $sql);

            // Check if the insertion query was successful
            if ($result) {
                // Registration successful
                $registered = 1;
            } else {
                // Print MySQL error message and exit if insertion query fails
                die(mysqli_error($con));
            }
        }
    }
}
?>




<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"content="width=device-width,initial-scale=1,shrink-to-fit=no"> 
   <link rel="stylesheet" href="./bootstrapmain.css">
	<link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<title>Linkup</title> 
	<style>
		  .float-right li a{
    
}
body{
  position: relative;
}
*{
    font-family: cursive;
}
nav{
	position: sticky;
}
.navbar-brand{
    font-weight: bolder;
    color: darkslategrey;
    font-family:'Courier New', Courier, monospace;
}
strong:hover{
    font-family:'Courier New', Courier, monospace;
    font-size: larger;
    color: rgb(58, 51, 51);
    color: rgb(12, 11, 12);
  text-shadow: 1px 1px 2px black, 0 0 25px rgb(144, 135, 135), 0 0 5px darkblue;

}
.svg-icon.search-icon {
    display: inline-block;
    width: 30px;
    height: 30px;
  
    /* On hover: blue strokes */
    &:focus,
    &:hover {
      .search-path {
        stroke: rgb(41, 158, 204);
        fill:  rgb(41, 158, 204);
      }
    }
  
    /* On click: thicker black strokes  */
    &:active {
      .search-path {
        stroke: #111516;
        stroke-width: 2px;
      }
    }
  }.cen{
  margin-inline: center; position: relative;
  }
  .position-absolute{
    position: absolute;
    top: 60lvh;
    left: 40lvw;
    background-color: #f2cbaead;
    z-index: 1;
    
  }
 
	</style>

</head> 

<body > 
	<!-- <h1 class=" mt-5 text-dark text-center context" style="font-family: cursive;" >LINKUP LOGIN PAGE </h1>  -->
     <!-- NAV BAR  -->
	 <nav class="navbar navbar-light  sticky-top bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="U-ezgif.com-crop.gif" alt="" width="50" height="55" class="d-inline-block align-text-top">
         <strong class="cen">LINKUP</strong>
          </a>
          <form class="d-flex">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">
                <div >
                    <a>
<!-- Here's the inline SVG icon -->
                      <svg  class="svg-icon search-icon" aria-labelledby="title desc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7"><title id="title">Search Icon</title><desc id="desc">A magnifying glass icon.</desc><g class="search-path" fill="none" stroke="#848F91"><path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4"/><circle cx="8" cy="8" r="7"/></g></svg>
                    </a>
                  </div>
             </button>
          </form>
          <a class="navbar-brand" href="#">
            <figure>
             <img src="./home-svg.svg" alt="home" width="35" height="35" class="d-inline-block align-text-top" style="margin-top: 100;">
             <figcaption class="image">Home</figcaption>
            </figure>
          </a>
          <a class="navbar-brand" href="#">
            <figure>
            <img src="./chat-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
            <figcaption class="image">Message</figcaption>
          </figure>
          </a>
          <a class="navbar-brand" href="#">
            <figure>
            <img src="./notification-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
            <figcaption class="image">Notification</figcaption>
          </figure>
          </a>
          <a class="navbar-brand" href="#">
            <figure>
            <img src="./crown-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
            <figcaption class="image">Premium</figcaption>
          </figure>
          </a>
          <a class="navbar-brand" href="#">
            <figure>
            <img src="./profile.png" alt="home" width="30" height="30" class="d-inline-block align-text-top" style="border-radius: 50%;">
            <figcaption class="image">My Profile</figcaption>
          </figure>
          </a>
          <a class="navbar-brand" href="#">
            <figure>
            <img src="./grid.png" alt="home" width="30" height="25" class="d-inline-block align-text-top">
            <figcaption class="image">Business</figcaption>
          </figure>
          </a>
        </div>    
        </nav>
         <!-- above the footer -->
    <div class="alert alert-warning alert-dismissible fade show p-2" role="alert" style="width:100%; text-align: center; font-size: large;">
      Didn't Login ?

      <!-- triangle svg -->
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
       <!-- php -->
    <a href="./loginphp.php" class="btn btn-primary m-4" style="margin-left: 1rem;">
    Login
  </a>
  

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        </div>
      </div>
    </div>
  </div>
  


	<div class="container mt-5 "> 
		<div class="row justify-content-center"> 
			<div class="col-md-6"> 
				<div class="card"> 
					<div class="card-body"> 
            <div  class="mb-3"  style="text-align:center;" >
             <div class="h2 text-primary p-3">SIGN UP</div>
              <img src="./profile.png" alt="PROFILE" style="border-radius: 50%;" width="20%" height="20%">
            </div>
						<form id="registrationform" action="./index.php" method="post" name="registrationform"> 
							<div class="form-group"> 

      <!-- php  -->
      <?php
//php
if ($userexist)
{
  echo '<div class="alert text-center  alert-dismissible fade show" role="alert" style="  background-color: #f2cbaead;">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
  <b>USER ALREADY EXIT</b>
  <div>
  <a href="./loginphp.php" class="btn btn-primary m-4" style="margin-left: 1rem;">
  Login
</a>
  </div>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($registered)
{
  echo '<div class="alert text-center  alert-dismissible fade show" role="alert" style="  background-color: #1e802dad;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
  <b>SUCESSFULLY REGISTERED</b>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <div>
  <a href="./loginphp.php" class="btn btn-primary m-4" style="margin-left: 1rem;">
  Login
</a>
</div>
</div>';
}

?>
								<label for="name">Name</label> 
								<input type="name" name="name"  class="form-control"id="name"placeholder="name" required> 
							</div> 
							<!-- <div class="form-group">  -->
								<!-- <label for="name">Last Name</label>  -->
								<!-- <input type="name"class="form-control"id="name"placeholder="name" required>  -->
							<!-- </div>  -->
							<div class="form-group"> 
						
								<label for="email">Email</label> 
								<input type="email"  name="email"  class="form-control"id="email"placeholder="Email" required> 
							</div> 
							<div class="form-group"> 
								<label for="password">Password </label> 
								<input type="password"  name="password" class="form-control"id="password" pattern=".{8,}" placeholder="Password" required> 
							</div> 
              <div class="form-group">
                <label>Select your gender&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="radio" id="gender" name="gender" value="male">
  <label for="male">Male</label>&nbsp;&nbsp;
  <input type="radio" id="gender" name="gender" value="female" checked value="female">
  <label for="female">FeMale</label>&nbsp;&nbsp;
  <input type="radio" id="gender" name="gender" value="others">
  <label for="others">Others</label>
              </div>

							<div class="form-group"> 
								<label for="number">Phone Number </label> 
								<input type="tel"class="form-control" name="phno" min="10" value="+91" width="10"> 
							</div> 
              <input type="submit" class="btn  btn-outline-primary">
              <input type="reset" class="btn btn-danger">
						</form> 
						<p class="mt-3">Already if have an account?
            <a href="./loginphp.php" class="btn btn-primary m-4" style="margin-left: 1rem;">
    Login
  </a>
  
 
        </div>
      </div>
    </div>
  </div>
  
                    </div> 
				</div> 
			</div> 
		</div> 
	</div>
    </ul>
</div>
</body> 

</html>

