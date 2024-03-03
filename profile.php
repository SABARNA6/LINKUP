<?php
session_start();
include 'server.php';


// Check if the email session variable is set
if(isset($_SESSION['name'])&&isset($_SESSION['email'])) {
    // Access the email variable
    $email=$_SESSION['email'];
    
    $sqllogin=" SELECT * FROM data WHERE email='$email'  "; 
    $result1=mysqli_query($con,$sqllogin);
    if ($result1)
    {
        $num=mysqli_num_rows($result1);
        if ($num>0)
        {    $row = mysqli_fetch_assoc($result1);
             $username = $row['name'];
             $gender=$row['gender'];
             $phno=$row['phno'];

        }
    }
    //echo $_SESSION['email'];
   }
else{
   header('location:error.php');
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
  .list-group-item{
    color: rgb(215, 195, 66);;
    padding: 20px;
    background-color:rgba(233, 249, 217, 0.3);
  }
  .list-group-item:hover{
    background-color:rgba(240, 209, 250, 0.707) ;
  }
  .list-group-item span{
    color: mediumturquoise;
    float:right;
  }
 
	</style>

</head> 

<body > 
	<!-- <h1 class=" mt-5 text-dark text-center context" style="font-family: cursive;" >LINKUP LOGIN PAGE </h1>  -->
     <!-- NAV BAR  -->
	
     <nav class="navbar navbar-dark bg-custom-2 sticky-top colo bg-info">
      <div class="container-fluid">
        <a class="navbar-brand active" href="#">
          <img src="U-ezgif.com-crop.gif" alt="" width="50" height="55" class="d-inline-block align-text-top">
       <strong class="cen">LINKUP</strong>
        </a>
        <form class="d-flex">
          <input class="form-control " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">
              <div >
                  <a>
<!-- Here's the inline SVG icon -->
                  <svg class="svg-icon search-icon" aria-labelledby="title desc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.9 19.7"><title id="title">Search Icon</title><desc id="desc">A magnifying glass icon.</desc><g class="search-path" fill="none" stroke="#fff"><path stroke-linecap="square" d="M18.5 18.3l-5.4-5.4"/><circle cx="8" cy="8" r="7"/></g></svg>
                  </a>
                </div>
           </button>
        </form>
        <a class="navbar-brand hi active" href="./home.php">
          <figure>
            <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="2rem" fill="#fffff" class="bi bi-house-door-fill hi" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
            </svg>             <figcaption class="image">Home</figcaption>
          </figure>
        </a>
        <a class="navbar-brand" href="message.php">
          <figure>
          <img src="chat-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
          <figcaption class="image">Message</figcaption>
        </figure>
        </a>
<!-- notification offcanvas -->
<a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
  <figure>
  <img src="notification-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
  <figcaption class="image">Notification</figcaption>
</figure>
</a>
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
<div class="offcanvas-header">
  <h5 id="offcanvasTopLabel">New Notification</h5>
  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
  <img src="hcltech_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;HCLTech
  <p>HCLTech is a global technology company, home to more than 224,000 people across 60 countries, 
      delivering industry-leading capabilities centered around digital, engineering, cloud and AI, 
      powered by a broad portfolio of technology services and products. </p>
       <img src="vanathi.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Vanathi M
       <p>From syntax struggles to 100 days of syntax symphonies...🎉
          ✨After consistently working on LeetCode and achieving a 100-𝒅𝒂𝒚 𝒔𝒕𝒓𝒆𝒂𝒌 ,
          I found myself in high spirits, confident in my coding abilities and motivated to take on even more challenges.</p>
            <img src="hackerrank_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;HackerRank
            <p>HackerRank is a technology hiring platform that is the standard for assessing developer skills 
              for over 3,000 companies around the world. HackerRank helps companies hire skilled developers and
               innovate faster by enabling tech recruiters and hiring managers to objectively evaluate talent at every
                stage of the recruiting process.</p>
                 <img src="microsoft_azure_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Microsoft Azure
                 <p>Join the Microsoft Azure community to be the first to learn about tech innovations,
                   industry trends, updates relevant to you and your team.</p>
</div>
</div>
<!-- premium modal -->
<a class="navbar-brand" href="#" data-toggle="modal" data-target="#modal1">
  <figure>
  <img src="crown-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
  <figcaption class="image">Premium</figcaption>
</figure>
</a>  

<!-- Modal -->
<div class="modal hide fade" id="modal1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title text-info" id="exampleModalLongTitle">Payment Details
        </h5><button type="button" class="close btn-close" data-dismiss="modal" aria-hidden="true"></button>
       
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <h5 class="card-title">Pay through</h5><br>
          <img src="payment.png"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >
          <img src="phonepe.png"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" ><br>
        Scan Here To Pay and Get Premium Just Only $99..
         <img src="qrcode.png" width="50" height="50" class=" mt-2 img1" >
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
           Text here to write about yourself!
          </textarea> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Pay</button>
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>


        <a class="navbar-brand" href="./profile.php">
          <figure>
          <img src="profile.png" alt="home" width="30" height="30" class="d-inline-block align-text-top" style="border-radius: 50%;">
          <figcaption class="image">My Profile</figcaption>
        </figure>
        </a>
       
<!-- business offcanvas -->
      <a class="navbar-brand"  data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
        <figure>
        <img src="grid.png" alt="home" width="30" height="25" class="d-inline-block align-text-top">
        <figcaption class="image">Business</figcaption>
      </figure>
      </a>      
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">For Business<br><br>
          &nbsp; &nbsp; &nbsp;Visit more linkup products</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <img src="learning.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Linkup learning</a><br>
            <img src="talentinsight.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Talent Insight</a><br>
            <img src="post a job.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Post a Job</a><br>
            <img src="client.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp; <a href="#" style="text-decoration: none;">Find New clients</a><br>
            <img src="advertise.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Advertise</a><br>
            <img src="group.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Group to connect</a><br>
            <img src="servicemarketplace.png" alt="home" width="50" height="50" class="d-inline-block align-text-top"> &nbsp;<a href="#" style="text-decoration: none;">Service market place</a><br>
        </div>
          <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
             Explore More For Business
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton hov">
              <li><a class="dropdown-item" href="#">Hire on Linkup</a></li>
              <li><a class="dropdown-item" href="#">Sell on Linkup</a></li>
              <li><a class="dropdown-item" href="#">post a job for free</a></li>
              <li><a class="dropdown-item" href="#">Advertise on Linkup</a></li>
              <li><a class="dropdown-item" href="#">Admire center</a></li>
            </ul>
      </div>
    </nav>
     <div class="row  mt-5 justify-content-center" >
        <div class="col-5 ">
          <div class="card">
            <div style="padding: 20px;">
            <div  class="mb-3"  style="text-align:center;" >
              <img src="./profile.png" alt="PROFILE" style="border-radius: 50%;" width="20%" height="20%">
            </div>
            <ul class="list-group">
  <li class="list-group-item">NAME <span style="text-transform:capitalize;"><?php echo $username; ?></span></li>
  <li class="list-group-item">EMAIL <span><?php echo $email; ?></span> </li>
  <li class="list-group-item">GENDER <span style="text-transform:capitalize;"><?php echo $gender; ?></span></li>
  <li class="list-group-item">PHONE NUMBER <span style="text-transform:capitalize;"><?php echo $phno;  ?></span></li>
  
</ul>
<div class="m-4" style="text-align:center;">
    
<a class="btn btn-danger text-light" href="./index.php"  > SIGN OUT<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></a>
</div>
      </div>
         
</body> 

</html>


