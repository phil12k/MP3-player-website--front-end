<html>
    <head>
            <title>Log In</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
            <script src="javaScript.js"></script>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    </head>

    <body style="background-color: whitesmoke;">
    <?php
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

</body>
<?php
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
    } 
  }

  if($check)
  {
        header("Location:duringlogin.php") ;
  }
?>
    </body>
</html>