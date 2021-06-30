<html>


    <head>
    <title>Log In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script src="javaScript.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:0px;">

              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li  data-slide-to="0" class="active"></li>
                <li  data-slide-to="1"></li>
                <li  data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="lost.jpg" alt="New York">
                  <div class="carousel-caption">
                    <h3></h3>
                    <p>Let's break the INTERNET!!!<br><i>~Wreck-It Ralph.</i></p>
                  </div>
                </div>
            
                <div class="item">
                  <img src="ill.jpg" alt="Chicago">
                  <div class="carousel-caption">
                    <h3></h3>
                    <p>MusicLib -- we'll play you some music. <br>               Remember to invite your friends!</p>
                  </div>
                </div>
            
                <div class="item">
                  <img src="nier.jpg" alt="Los Angeles">
                  <div class="carousel-caption">
                    <h3>GAMING MUSIC</h3>
                    <p>Hurry !!!<br>--- limied premier albums available...</p>
                  </div>
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="left carousel-control"  role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control"  role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            


<style>
  .container {
                padding:80px;
              }

.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
   width: 80%;
  height: 80%;
  opacity: 0.7;
     }
        
  .person:hover {
  border-color: #f1f1f1;
      }

.navbar {
  margin-bottom: 0;
  background-color: #2d2d30;
  border: 0;
  font-size: 15px !important;
  letter-spacing: 1px;
  opacity: 0.8;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand {
  color: #d5d5d5 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
  color: #fff !important;
}
input {
    height:40px ;
    width : 300px ;
    border: 3px solid brown ;
    border-color:rgb(33, 15, 15);
    border-radius:50px ;
    padding:5px;
    margin:10px ;
 }

/* The active link */
.navbar-nav li.active a {
  color: #fff !important;
  background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
  border-color: transparent;
}
.var {
  color:brown ;
  font-size:35px ;
  font-weight:bolder ;
  -webkit-text-stroke-width: 2px;
-webkit-text-stroke-color: black;
}

/* Dropdown */
.open .dropdown-toggle {
  color: #fff ;
  background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
  color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
  background-color: red !important;
}
</style>
</head><?php
$emailErr = $passwordErr  = "";
$email = $password  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
   
  }
    
  if (empty($_POST["password"])) {
    $passwordErr= "Can't be empty";
  } else {
    $password = test_input($_POST["password"]);
    
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?><body style="background-color: rgb(40, 150, 165);">
        <center>  <h1 style="align-content:center;font-weight:bolder;text-decoration:underline;margin-top:50px;">
          <b >To continue, log in to MusicLib.</b></h1>
        
          <div>
          <div style="width:700px;
background-repeat:no-repeat;background-size:cover;">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <span class="var">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value=<?php echo $email;?> >
  <br><br>
  <span class="var">Password:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='password' name='password'>
 <br><br>
  <input type="submit" name="submit" value="Submit" id="logginn"
   style="background:none;height:45px;width:200px;font-weight:bolder;color:white;font-size:20px;">  
</form>
</div>
          </div>
      </center>

</body><?php
  $conn = mysqli_connect('localhost','root','9148050536','signup') ;
  $query = "SELECT * FROM signup" ;
  $result = mysqli_query($conn,$query) ;
  $name = "" ;
  $check = 0 ;
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
  for($i=0 ; $i <count($rows)  ; $i = $i + 1 )
  {
    if (strcmp($email, $rows[$i]["EmailID"]) ==0 && strcmp($password, $rows[$i]["UserPassword"]) ==0) 
    {
      $name = $rows[$i]["UserName"] ;
      $check=1 ;
      if($check===1)
      {
          header("Location:second.php") ;
      }
    } 
  }

?>





<body>
 

    <div class="container text-center">
        <h1>THE MusicLib</h1>
        <p><em>We love music!</em></p>
        <p>We have created a fictional music website. Memento Mori...</p>
        <br>
        
      </div>
    </body>




    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MusicLib</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">HOME</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">CREATORS
                <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                <li><a href="#">SHASHANK BAROLE</a></li>
                <li><a href="#">PHILIP JOSEPH</a></li>
                <li><a href="#">RITVIK PATIL</a></li>
              </ul>
              

            


            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT
                <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                <li><a href="#">reviews & feedback are greatly appreciated</a></li>
                <li><a href="#">+91 9263494753</a></li>
                <li><a href="#">+91 8105806355</a></li>
              </ul>


            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Merchandise</a></li>
                <li><a href="#">Extras</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
<script>
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
      
          // Prevent default anchor click behavior
          event.preventDefault();
      
          // Store hash
          var hash = this.hash;
      
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
      
            // Add hash (#) to URL when done scrolling (default click behavior)
            //window.location.hash = hash;
            });
          } // End if
        });
      })
</script>

<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Banshankari, PES</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
      <form>
        <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name1" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email1" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments1" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>




</html>