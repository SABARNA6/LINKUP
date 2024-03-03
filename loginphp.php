<?php

$logged=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{   include 'server.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sqllogin=" SELECT * FROM data WHERE email='$email' AND password='$password'  "; 
   
    $result1=mysqli_query($con,$sqllogin);
   
  // $username = $row['username'];
  //  echo $username ;
    if ($result1)
    {
        $num=mysqli_num_rows($result1);
        if ($num>0)
        {    $row = mysqli_fetch_assoc($result1);
          $username = $row['name'];
          
            echo "user creditals are valid ";
            $logged=1;
           session_start();
            $_SESSION['email']=$email;
            $_SESSION['name']=$username;
           // $_SESSION['row']=$row;
            session_write_close();
            header('location:home.php');
        }
        else{
            //echo "INVALID EMAIL OR PASSWORD ";
            $invalid=1;
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
  <script>
    function formValidation() {
  let x = document.forms["form1"]["name"].value;
  if (x == "") {
    alert("Fill in the details");
    return false;
  }
}
function newFunction(){
  document.getElementById("form1").reset();
}


  </script>
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
            <img src="./U-ezgif.com-crop.gif" alt="" width="50" height="55" class="d-inline-block align-text-top">
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
      <div class="row  mt-5 justify-content-center" >
        <div class="col-5 ">
          <div class="card">
            <div style="padding: 20px;">
  <form class="form" action="./loginphp.php" style="text-align: left;" method="post" id="form1" name="form1" onSubmit="return formValidation()">
            <div  class="mb-3"  style="text-align:center;" >
              <img src="./profile.png" alt="PROFILE" style="border-radius: 50%;" width="20%" height="20%">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">EMAIL</label>
              <input type="text" name="email" class="form-control" id="username" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required placeholder="Enter your password">
            </div>
            <div class="p-2">
            <!-- <button type="submit"class="btn btn-primary">Login</button> -->
            <input class="btn btn-primary" type="submit">
           <input type="reset" class="btn btn-primary">
            </div>
          </form>
          <?php
if ($invalid)
{
    echo '<div class="alert text-center  alert-dismissible fade show" role="alert" style="  background-color: #f2cbaead;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
    <b>INVALID EMAIL OR PASSWORD</b>
    
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    ';
}

?>
            </div>
          </div>
        </div>
      </div>
         
</body> 

</html>


