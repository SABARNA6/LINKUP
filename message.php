<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkup Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <style>
    .bd-example {
    padding: 1.5rem;
    margin-right: 0;
    margin-left: 0;
    border-width: 1px;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}

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



  .list-group-item a{
    text-decoration: none;
  }
 .list-group-item a :hover {
    text-decoration: underline;
    text-underline-offset: 2px;
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
        stroke: rgb(27, 24, 24);
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
  
  .list-group-item a{
    text-decoration: none;
  }
 .list-group-item a :hover {
    text-decoration: underline;
    text-underline-offset: 2px;
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


nav{
  background: linear-gradient(to bottom right lightskyblue rebeccapurple sandybrown);
}
  </style>
</head>
<body>
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
          <a class="navbar-brand hi " href="home.php">
            <figure>
              <svg xmlns="http://www.w3.org/2000/svg" width="4rem" height="2rem" fill="#fffff" class="bi bi-house-door-fill hi" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
              </svg>             <figcaption class="image">Home</figcaption>
            </figure>
          </a>
          <a class="navbar-brand active" href="message.php">
            <figure>
            <img src="chat-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
            <figcaption class="image">Message</figcaption>
          </figure>
          </a>
          <!-- notificationoffcanvas -->
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
<a class="navbar-brand" href="#"data-toggle="modal" data-target="#exampleModalLong">
  <figure>
  <img src="crown-png.png" alt="home" width="30" height="30" class="d-inline-block align-text-top">
  <figcaption class="image">Premium</figcaption>
</figure>
</a>  
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLongTitle">Payment Details
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
       <!-- FORM      -->
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
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Pay</button>
      </div>

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
     
    <div class="bd-example">
        <div class="row">
          <div class="col-4">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">   
                    <img src="mathu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Mathu Mathi M
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">   
                <img src="sabarna.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Sabarna Krishnaveni Balasubramanian
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">
                <img src="obu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Obupreethi G
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">
                    <img src="valar.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Valar Mathi M
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">
                    <img src="vanathi.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Vanathi M
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-6">
                    <img src="genai_works_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Generative AI
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-7">
                    <img src="university.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;University of Liverpool
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-8">
                    <img src="microsoft_azure_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Microsoft Azure
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-9">
                    <img src="salesforce_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Salesforce
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-10">
                    <img src="hcltech_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;HCLTech
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-11">
                    <img src="altair_engineering_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Altair
                </a>
                <a class="list-group-item list-group-item-action" href="#list-item-12   ">
                    <img src="hackerrank_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Hacker Rank
                </a>
             </div>
          </div>
          <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-1" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="mathu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Mathu Mathi M

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-2" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="sabarna.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Sabarna Krishnaveni Balasubramanian

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-3" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="obu.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Obupreethi G

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-4" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="valar.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Valar Mathi M

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-5" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="vanathi.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Vanathi M

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-6" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="genai_works_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Generative AI

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-7" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="university.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;University of Liverpool

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-8" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="microsoft_azure_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Microsoft Azure

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-9" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="salesforce_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;SalesForce

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-10" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="hcltech_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;HCLTech

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-11" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="altair_engineering_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;Altair

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div>
            </div>
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" id="list-item-12" tabindex="0">
                <div class="card">
                    <div class="card-header">
                        <img src="hackerrank_logo.jpg"style="border-radius: 50%;"  width="50" height="50" class=" mt-2 img1" >&nbsp;&nbsp;HackerRank

                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Message</h5>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
                       Text here to share your Thoughts and Ideas!
                      </textarea> <br> <a href="#" class="btn btn-primary" style="float: right;">send</a>
                    </div>
                </div><br>
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