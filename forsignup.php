<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: white;
font-weight:bolder ;
font-size:25px;}

 input {
    height:40px ;
    width : 300px ;
    border: 3px solid brown ;
    border-color:rgb(33, 15, 15);
    border-radius:50px ;
    padding:5px;
    margin:10px ;
 }



.var {
  color:brown ;
  font-size:35px ;
  font-weight:bolder ;
  -webkit-text-stroke-width: 2px;
-webkit-text-stroke-color: black;
}

*:focus{
  outline:none ;
  
}

</style>
</head>
<body style="align-content:center;align-items:center;background-image:url('signup.jpg');background-repeat:no-repeat;background-size:cover;">  
<center>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr  = "";
$name = $email = $password  = "";
$dob = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

  
  }
  
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

  $dob =$_POST["dob"];

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1 style="color:grey;">Sign Up to use MusicLib</h1>
<p><span class="error">* required field</span></p>
<div style="width:700px;
background-repeat:no-repeat;background-size:cover;">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <span class="var">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" value="<?php echo $name;?>" >
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <span class="var">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value=<?php echo $email;?> >
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <span class="var">Password:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='password' name='password'>
  <span class="error">* <?php echo $passwordErr;?></span>
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  <span class="var">Date of Birth:</span>&nbsp;&nbsp;&nbsp;<input name="dob" type="Date" >
  <br><br>
  
  <input type="submit" name="submit" value="Submit" id="signupbutton" 
   style="background:none;height:45px;width:200px;font-weight:bolder;color:white;font-size:20px;">  
</form>
</div>
</center>

<?php



$conn = mysqli_connect('localhost','root','9148050536','signup') ;



    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL" . mysqli_connect_errno() ;
    }



    $sql = "INSERT INTO signup (UserName,EmailID,UserPassword,DOB,ID) VALUES (?,?,?,?,NULL)" ;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss",$name,$email,$password,$dob);
    $stmt->execute();

    mysqli_close($conn);

    if($name !=''&& $email !=''&& $password !='')
{
//  To redirect form on a particular page
header("Location:duringsignup.php");
}


?>

</body>
</html>