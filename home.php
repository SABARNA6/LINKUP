<?php
session_start();

// Check if the email session variable is set
if(isset($_SESSION['email'])) {
    // Access the email variable
    $email = $_SESSION['name'];
    
    // Now you can use $email as needed in home.php
  //  echo "Welcome, $email!";
} else {
    // Redirect the user if the email session variable is not set
    header('Location: loginphp.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkup Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  <style>
    
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.footer1 {
  display: flex;
  background: #333;
  justify-content: flex-end;
  align-items: flex-end;
  min-height: 20lvh;

}

.footer {
  position:static;
  bottom:1lvh;
  width: 100%;
  background: rgb(30, 30, 30);
  height:fit-content;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}
li:hover{
    background-color:rgba(200, 246, 207, 0.597);
}
.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

    .float-right li a{
    
}
*{
    font-family: cursive;
}
.navbar-brand{
    font-weight: bolder;
    color: darkslategrey;
    font-family:'Courier New', Courier, monospace;
}
strong:hover{
    font-family:'Courier New', Courier, monospace;
    font-size: larger;
    color: rgb(141, 135, 135);

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
  }
  body, html{background: rgb(33,254,74);
background: radial-gradient(circle, rgba(33,254,74,0.6750349798122374) 0%, rgba(33,253,159,0.28007699661896013) 0%, rgba(167,206,222,0.5489845596441701) 0%, rgba(33,107,254,0.7142506660867471) 25%, rgba(33,254,245,1) 100%);

 margin: 0;
    padding: 0;
  }
  .background{
   display: flex;
    background: url(./pexels-eberhard-grossgasteiger-1624504.jpg);
    width:100%;
  height: 100px;
  background-position: center;
  align-items: center;
  justify-content: center;
  /* Make the background image cover the area of the <div>, and clip the excess */
  background-size: cover;
  }
  .background img{
    margin: auto;
    display: block;
    position: relative;
    top:8lvh;
  }
  .pt{
    padding-top: 8lvh;
    text-align: center;
    font-size:70%;
  }
  .const{
    padding: 2lvh;
    color: darkgray;
  }
  .list-group-item a{
    text-decoration: none;
  }
 .list-group-item a :hover {
    text-decoration: underline;
    text-underline-offset: 2px;
  }
  .num{
    color: rgb(39, 163, 246);
    float : right;
  }
  .with{
    border-radius: 40%;
  }
  .btn-color{
    margin-top: 2%;
    padding: 2%;
    background-color: #8a9597;
  }
  .btn-color:hover{
    background-color: #a8b2b3;
    color: wheat;
  }
 
    .float-right li a{
    
}
*{
    font-family: cursive;
}
.navbar-brand{
    font-weight: bolder;
    color: darkslategrey;
    font-family:'Courier New', Courier, monospace;
}
strong:hover{
    font-family:'Courier New', Courier, monospace;
    font-size: larger;
    color: darkgray;

}
.svg-icon.search-icon {
    display: inline-block;
    width: 30px;
    height: 30px;
  
    /* On hover: blue strokes */
    &:focus,
    &:hover {
      .search-path {
        stroke: rgb(56, 48, 48);
        stroke-width: 2px;
      }
    }
  
    /* On click: thicker black strokes  */
    &:active {
      .search-path {
        stroke: #111516;
        stroke-width: 2px;
      }
    }
  }
  .cen{
  margin-inline: center; position: relative;
  body{
    background-image: url('background.jpg');
  }
  .background{
   display: flex;
    background: url(./pexels-eberhard-grossgasteiger-1624504.jpg);
    width:100%;
  height: 100px;
  background-position: center;
  align-items: center;
  justify-content: center;
  /* Make the background image cover the area of the <div>, and clip the excess */
  background-size: cover;
  }
  .background img{
    margin: auto;
    display: block;
    position: relative;
    top:8lvh;
  }
  .pt{
    padding-top: 8lvh;
    text-align: center;
    font-size:70%;
  }
  .const{
    padding: 2lvh;
    color: darkgray;
  }
  .list-group-item a{
    text-decoration: none;
  }
 .list-group-item a :hover {
    text-decoration: underline;
    text-underline-offset: 2px;
  }
  .num{
    color: rgb(39, 163, 246);
    float : right;
  }
  li:hover{
    background-color: rgba(227, 236, 224, 0.826);
  }
  .with{
    border-radius: 40%;
  }
  .btn-color{
    margin-top: 2%;
    padding: 2%;
    background-color: #8a9597;
  }
  .btn-color:hover{
    background-color: #a8b2b3;
    color: wheat;
  }
  
  .hi{
    text-align: center;
  }
  .foot {
      background-color: rgb(62, 65, 68);
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 20px;
      box-sizing: border-box;
     color: #606030;
  }
  
#subtitle{
    color: rgb(133, 127, 127);
    font-size: 18;
    text-transform: capitalize;
    
}
div a{
    text-decoration: none;
    color: #606080;
    padding: 12px;
}
div a:hover{
   color:#796c6c;
}
.col
{
    padding-top: 20px;
}
[class*="btn-"]{
    border: none;
    border-radius: 8px;
    padding:10px;

}
btn-primary{
    background-color: rgb(60,60,60);
}
.c {
  display: flex;
  align-items: start;

}

 .img1{
  max-width: 100%;
  max-height:100%;
}

.text1 {
  font-size: 20px;
  padding-left: 20px;
}
nav{
  background: linear-gradient(to bottom right lightskyblue rebeccapurple sandybrown);
}
  </style>
</head>
<body>
  
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
   
     <!-- container -->
     <div class="container">
      <!--ROWS  -->
      <div class="row ">
          <!-- col-1 -->
          
              <!-- card-content group-->
              <div class="row row-cols-1 row-cols-md-2 g-4">
                  <!-- PROFILE TAB -->
                  <div class="col">
                      <div class="card  " >
                          <!-- profile -->
                      <div class="background mx-auto d-block">
                          <img src="./profile.png" class="rounded-circle img-thumbnail" alt="profile" title="profile" width="100px" height="100px" >
                      </div>
                      <!-- user name and description -->
                      <div class="card-body pt">
                        <h5 class="card-title" style="text-transform:capitalize;"><?php echo $email; ?> </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <!-- connection -->
                      
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <span class="const">Connection</span> <span class="num">16</span>
                           <br>
                          <a href="#"> Connect with alimuni</a>
                      </li>
                        <li class="list-group-item">
                         <small class="const"> Strengthen your profile with an AI writing assistant<small>
                         <br> <img src="./crown-png.png" alt="Premium" width="15px">
                      <a href="#">Try Premium for free</a> 
                        </li>
                        <li class="list-group ">
                        <span style="text-align: center;" class="p-2">  <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#404040" class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                              <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                        
                          </svg>
                          &nbsp;&nbsp; MY BOOKMARK<span>
                        </li>
                        </ul>
                  </div>
                  </div>
                  <!-- recent -->
                 <div class="col">
                  <div class="card border-info mb-3" >
                      <div class="const" style="color: rgb(60, 59, 59);font-weight: bold;">RECENT</div>
                        <div class="card-body text-info">
                    <ul class="list-group list-group-flush">
                         <li class="list-group-item">
                           <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                              </svg>
                              <span style="padding-left: 2px;" class="const"> Tech Startup CEOs......
                           </span>
                        </li>
                        <li class="list-group-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                  </svg>
                                  <span style="padding-left: 2px;" class="const">IoT Makers / Develope....
                               </span>
                        </li>
                        <li class="list-group-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                  </svg>
                                  <span style="padding-left: 2px;" class="const"> Raspberry pi and Arduino....
                               </span>
                        </li>
                        <li class="list-group-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                  </svg>
                                  <span style="padding-left: 2px;" class="const">Home Automation & Embe....
                               </span>
                        </li>
                        </ul>
                        
                      </div>
                 </div>
                 </div>
                 <!-- GROUP -->
                  <div class="col">                  
                  <div id="accordion">
                     <div class="card border-info" style="background-color: lightgrey;">
                        <div class="" style="font-weight: bold; text-align: left;" id="headingOne">
                          <h5 class="mb-0">
                           <div class="d-grid"> <button class="btn card-header " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             GROUPS
                            </button>
                            </div>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                              <ul class="list-group list-group-flush">
                                  <li class="list-group-item">
                                     <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                          <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                        </svg>
                                        <span style="padding-left: 2px;" class="const"> Tech Startup CEOs......
                                     </span>
                                  </li>
                                  <li class="list-group-item">
                                      <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                            </svg>
                                            <span style="padding-left: 2px;" class="const">IoT Makers / Develope....
                                         </span>
                                  </li>
                                  <li class="list-group-item">
                                      <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                            </svg>
                                            <span style="padding-left: 2px;" class="const"> Raspberry pi and Arduino....
                                         </span>
                                  </li>
                                  <li class="list-group-item">
                                      <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                            </svg>
                                            <span style="padding-left: 2px;" class="const">Home Automation & Embe....
                                         </span>
                                  </li>
                              </ul>
                         
                           </div>
                        </div>
                  
                      </div>
                  </div>
                </div> 
                <div class="d-grid g-4 p-0 text-center" style="font-weight: bold;">
                  <button class="btn btn-color" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                   NEWS AND UPDATE  
                  </button>

                </div>
                <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">NEWS AND UPDATE</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                        
                    <ul class="list-group list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-start p-4">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">India's solar sector shines bright</div>
                         
                        </div>
                        <span class="badge bg-primary rounded-pill">8</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start p-4">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Attrition reduces across India Inc</div>
                         
                        </div>
                        <span class="badge bg-primary rounded-pill">10</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start p-4">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">FMCG demand to plummet</div>
                          
                        </div>
                        <span class="badge bg-primary rounded-pill">4</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start p-4">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">India’s GDP on growth path</div>
                          
                        </div>
                        <span class="badge bg-primary rounded-pill">5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-start p-4">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Work experience key for MBA grads</div>
                          
                        </div>
                        <span class="badge bg-primary rounded-pill">16</span>
                      </li>
                    </ul>   
                  </div>
                </div>
             
  
              </div>
          <!-- col -2 -->
          </div>
          <marquee behavior="scroll" direction="left" style="font-size: x-large; color: #111516;">
            <img src="icons8-new-48-removebg-preview.png" width="40" height="40">
            Job hiring compaines upto 20LPA...Fill this application form...To connect with us&nbsp;&nbsp;
            <a href="#" style="text-decoration: none; color: rgba(238, 79, 79, 1);">Click here</a></marquee>

      </div>
    
      <!-- POST -->
         <div class="d-grid " style="justify-content: center; align-items: center;" >
          <div type="button" class="btn btn-sm btn-outline-secondary m-4" style="text-align: left;border-radius: 8lvw 8lvw;background-color: #bad0e5;">
            <img src="./profile.png" class="p-2" alt="profile" style="border-radius: 50%; width: fit-content; height: 10lvh ;">
            <span class="p-2 m-4" style="width: 100lvh;" >
              WRITE THE POST
            </span>
            
            <!-- MODEL IN THE POST -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success p-2 m-2"  data-toggle="modal" data-target="#exampleModalLong">POST</button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong"  role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-info" id="exampleModalLongTitle">        CREATE A POST
              </h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                
              </button>
            </div>
            <div class="modal-body text-warning">
             <!-- FORM      -->
             <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                What DO You Want To Talk About?
              </textarea>
              <label class="form-label">DATE : </label>
              <input type="datetime-local" class="form-control" name="date" id="datetime">
              <label class="form-label">TAG PEOPLE <span ><svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentcolor" class="bi bi-hash" viewBox="0 0 16 16">
                <path d="M8.39 12.648a1 1 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1 1 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.51.51 0 0 0-.523-.516.54.54 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532s.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531s.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"/>
              </svg>  </span></label>
              <input type="text" class="form-control" name="tag" id="tag">
            </div>
              
      
      
            </div>
            <div class="modal-footer text-secondary">
             <input type="checkbox" name="DATE" id="date">
             <label>Include The Date</label>
              <button type="button" class="btn btn-primary">Post</button>
            </div>
          </div>
        </div>
      </div>

      </div>
          </div>
        </div> 
        
        <div class="row row-cols-1 row-cols-md-2 g-4 p-2 m-1" style="align-items: center; justify-content: center;">
          <div class="col">
            <div class="card p-2" style="height: auto; width: auto;">
              <div class="c">
              <div class="image">
               <img src="subi.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" ></div>
               <div class="text1 mt-2"><h5>Subitchaka Lakshimi A<a href="#" style="text-decoration: dimgrey; float: right;">&nbsp;&nbsp;<strong>+</strong>follow</a>
                  <br>
                  <a href="#" style="text-decoration: rgb(0, 157, 255); font-size: small;">2,888,345 followers promoted</a>
               </h5></div></div>
              <img src="subicertificatejpg.jpg" class="card-img-top p-3 mt-1" alt="..." width="50" height="400">
              <div class="card-body">
                <h5 class="card-title">I am super exited to share that I have just completed Duet AI.<details><summary style="color: aqua;">see more</summary><p>AI in Google Sheets. Online Course which made me to explore more.
                  I had a great experience learning industry aligned skills of 🌟Thank you, <a href="#"  style="color: blue; text-decoration: none;">#skillup</a> by <a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a> 🙌 
                  📢 I am super excited to share that I’ve just completed . 🎓
                 
                  I had a great experience learning industry aligned skills of <a href="#" style="color: blue; text-decoration: none;">#Upskilling</a>and<a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a>
                 
                  I’d recommend  to anyone looking to learn today’s in-demand professional skills. Keep learning and adding the valued certificates to your professional portfolio. 🌟
                 
                  Explore 200+ free courses: <a href="https://lnkd.in/g4udDpkg" style="text-decoration: none;">linkedin</a>Grow more to explore<a href="#" style="color: blue; text-decoration: none;">#Upskilling</a><a href="#" style="color: blue; text-decoration: none;">#Certification</a> <a href="#"  style="color: blue; text-decoration: none;">#JobReady</a><a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a></p></details>
  </h5><hr>
                <p class="card-text"><a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-share-48.png"  alt=".." width="30" height="30">Share
                </a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-like-48.png" alt=".." width="30" height="30">Like</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-comment-100.png" alt=".." width="30" height="30">Comment</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-bookmark-96.png" alt=".." width="30" height="30">Save</a></p>
              </div>
            </div>
          </div>
          
        </div>
       
        <div class="row row-cols-1 row-cols-md-2 g-4 p-2 m-2" style="align-items: center; justify-content: center;">
          <div class="col">
            <div class="card p-2" style="height: auto; width: auto;">
              <div class="c">
              <div class="image">
               <img src="mathu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" ></div>
               <div class="text1 mt-2"><h5>Mathu Mathi M<a href="#" style="text-decoration: dimgrey; float: right;">&nbsp;&nbsp;<b>+</b>follow</a>
                  <br>
                  <a href="#" style="text-decoration: aqua; font-size: small;">2,456,677 followers promoted</a>
               </h5></div></div>
              <img src="mathucertificate.jpg" class="card-img-top p-3 mt-1" alt="..." width="50" height="400">
              <div class="card-body">
                <h5 class="card-title">I have cherished to announce that I have just completed <details>
  <summary style="color: aqua;">see more</summary><p>my Introduction to java course ✨️Offered by simplilearn⚡️
    Thank you, <a href="#"  style="color: blue; text-decoration: none;">#skillup</a> by <a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a> 🙌 
   📢 I am super excited to share that I’ve just completed . 🎓
  
   I had a great experience learning industry aligned skills of <a href="#" style="color: blue; text-decoration: none;">#Upskilling</a>and<a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a>
  
   I’d recommend  to anyone looking to learn today’s in-demand professional skills. Keep learning and adding the valued certificates to your professional portfolio. 🌟
  
   Explore 200+ free courses: <a href="https://lnkd.in/g4udDpkg" style="text-decoration: none;">linkedin</a>Grow more to explore<a href="#" style="color: blue; text-decoration: none;">#Upskilling</a><a href="#" style="color: blue; text-decoration: none;">#Certification</a> <a href="#"  style="color: blue; text-decoration: none;">#JobReady</a><a href="#"  style="color: blue; text-decoration: none;">#SkillUpBySimplilearn</a>
                  </p></details>
                </h5><hr>
                <p class="card-text"><a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-share-48.png"  alt=".." width="30" height="30">Share
                </a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-like-48.png" alt=".." width="30" height="30">Like</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-comment-100.png" alt=".." width="30" height="30">Comment</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-bookmark-96.png" alt=".." width="30" height="30">Save</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 p-2 m-2" style="align-items: center; justify-content: center;">
          <div class="col">
            <div class="card p-2" style="height: auto; width: auto;">
              <div class="c">
              <div class="image">
               <img src="sabarna.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" ></div>
               <div class="text1 mt-2"><h5>SABARNA KRISHNAVENI BALASUBRAMANIAN<a href="#" style="text-decoration: dimgrey; float: right;">&nbsp;&nbsp;<b>+</b>follow</a>
                  <br>
                  <a href="#" style="text-decoration: aqua; font-size: small;">3,678,977 followers promoted</a>
               </h5></div></div>
              <img src="sabarnacertificate.jpg" class="card-img-top p-3 mt-1" alt="..." width="50" height="400">
              <div class="card-body">
                <h5 class="card-title">I have  super excited to announce that I have just completed my <details>
  <summary style="color: aqua;">see more</summary><p>chandrayaan maha quiz ✨️Offered by MyGov⚡️
    Thank you, <a href="#"  style="color: blue; text-decoration: none;">#Quiz</a> by <a href="#"  style="color: blue; text-decoration: none;">#MahaQuiz</a> 🙌 
    I had a great experience learning industry aligned skills of <a href="#" style="color: blue; text-decoration: none;">#Chandrayaan</a>and<a href="#"  style="color: blue; text-decoration: none;">#Skills</a>
  
    Keep learning and adding the valued certificates to your professional portfolio. 🌟
  
   
                </h5><hr>
                <p class="card-text"><a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-share-48.png"  alt=".." width="30" height="30">Share
                </a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-like-48.png" alt=".." width="30" height="30">Like</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-comment-100.png" alt=".." width="30" height="30">Comment</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-bookmark-96.png" alt=".." width="30" height="30">Save</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 p-2 m-2" style="align-items: center; justify-content: center;">
          <div class="col">
            <div class="card p-2" style="height: auto; width: auto;">
              <div class="c">
              <div class="image">
               <img src="obu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" ></div>
               <div class="text1 mt-2"><h5>OBUPREETHI G<a href="#" style="text-decoration: dimgrey; float: right;">&nbsp;&nbsp;<b>+</b>follow</a>
                  <br>
                  <a href="#" style="text-decoration: aqua; font-size: small;">1'6tv,564,789 followers promoted</a>
               </h5></div></div>
              <img src="obupreethicertificate.jpg" class="card-img-top p-3 mt-1" alt="..." width="50" height="400">
              <div class="card-body">
                <h5 class="card-title">I have cherished and divine to share that I have won Firstplace in <details>
  <summary style="color: aqua;">see more</summary><p> Mathematics Paper Presentation ✨️Offered by Kongu Engineering College⚡️
    Thank you, <a href="#"  style="color: blue; text-decoration: none;">#kec</a> by <a href="#"  style="color: blue; text-decoration: none;">#ppt</a> 🙌 
    I had a great experience to explore and share my knowledge <a href="#" style="color: blue; text-decoration: none;">#Math</a>and<a href="#"  style="color: blue; text-decoration: none;">#Skills</a>
  
    Keep learning and adding the valued certificates to your professional portfolio. 🌟
  
   
                </h5><hr>
                <p class="card-text"><a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-share-48.png"  alt=".." width="30" height="30">Share
                </a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-like-48.png" alt=".." width="30" height="30">Like</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-comment-100.png" alt=".." width="30" height="30">Comment</a>
                <a href="#" style="text-decoration: none;" class="p-4"><img src="icons8-bookmark-96.png" alt=".." width="30" height="30">Save</a></p>
              </div>
            </div>
          </div>
        </div>

    </div>
  
  

   
    <div class="foot p-4" style="background-color: #d17ff45c; position:relative; bottom: 0;">
           
         
            
      <div class="row">
        <div class="col-3"> 
           <div class="logo" style="font-family:'Times New Roman', Times, serif">
           <div style="display: block;">&nbsp;&nbsp;&nbsp;<img src="LINKUP.gif" width="60" height="60" alt ="...." />
             </div>
             

               </div>
             <div style="font-family: 'Times New Roman', Times, serif;padding: 15px;">
            <a href="#">HOME</a> |
            <a href="#">ACCESSIBILITY</a> |
            <a href="#">RATINGS</a> |
            <a href="#">ABOUT</a> | 
            <a href="#">FAQ</a> |
            <a href="mailto:sabarnakrish@gmail.com">CONTACT</a>
            </div> </div>
        <div class="col-3">
         <div class="col">   
           <span style="font-size: 20px;color: #94088db1;">FOLLOW US</span><br>
           <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-facebook"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-twitter"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
              </a></li>
          </ul>
         </div>
        <div class="col">
           <span style="font-size: 20px;color: #94088db1;">VISIT US</span><br>
           <div style="padding-left:16px;">
           <a href="#">Linkedin</a>&nbsp;&nbsp;&nbsp;
           <a href="#">Scaler</a> &nbsp;&nbsp;&nbsp; 
           <a href="#">Jobaaji</a>&nbsp;&nbsp;&nbsp;
       </div>
        </div>
       </div>
        <div class="col-3">
           <div class="col">
           <span style="font-size: 20px; color: #94088db1;">SUPPORT US:</span><br>
           <button class="btn btn-dark">
               Jop opportunities
           </button>
           </div>
           <div class="col">
               <span style="font-size: 20px; color: #94088db1;">WORK WITH US:</span><br>
                   <a href="#">View Jobs</a> <br>
           </div>
        </div>
        
        <div class="col-3"> 
          
           <div class="row col">
               <span style="font-size: 20px;color: #94088db1;">RESOUCES & LINKS </span><br>
          
            <div class="col">
               <a href="#">Library</a> <br>
               <a href="#">Title IX</a>  <br>
               <a href="#">Register</a> <br>
            </div>
            <div class="col">
               <a href="#">BlackBoard</a> <br>
               <a href="#">MyBently</a>  <br>
               <a href="#">Emergency Info</a> <br>
            </div>
       </div>
        </div>
        </div>
        
       </div>

 </body>
</html>