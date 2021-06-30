<html>
    <head>
            <title>Create Playlist</title>
   <style>
            #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li  {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}
a{text-decoration:none} ;

#myUL li a:hover:not(.header) {
  background-color: #eee; 
  /* Add a hover effect to all links, except for headers */
}

    </style>
    </head>
<?php

        $conn = mysqli_connect('localhost','root','9148050536','signup') ;
        $conn2 = mysqli_connect('localhost','root','9148050536','playlist') ;
        $query = "SELECT * FROM signup ORDER BY ID DESC LIMIT 1" ;
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
        $name = $row[0]["UserName"];
?>

<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" id="myInput" name="search" onkeyup="myFunction()" placeholder="Search for names..">
<input type = "submit"  value="Add" style="height:30px;width:150px;background:none;border:2px solid black;font-size:20px;">
</form>
<ul id="myUL">
<li id="1" onclick="addtolist('1')"><a href="#">Bekhayali</a></li>
<li id="2" onclick="addtolist('2')"><a href="#">Jaane Nahi Denge Tujhe</a></li>
<li id="3" onclick="addtolist('3')"><a href="#">Woh Ladki Hai Kahan</a></li>
<li id="4" onclick="addtolist('4')"><a href="#">Belageddu</a></li>
<li id="4" onclick="addtolist('5')"><a href="#">Thunder</a></li>
<li id="5" onclick="addtolist('6')"><a href="#">All is Well</a></li>
<li id="6" onclick="addtolist('7')"><a href="#">Intezaar</a></li>
</ul>
</body>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

<script>
    window.onload = checklist ;

    function checklist()
    {
        var name = "<?php echo $name ; ?>" ;
        name = name.trim() ;

        var list =localStorage.getItem(name) ;
    
      
        if(list != null)
        {
  
            window.location.href = "playlist.php" ;
        }

        else
        {
            alert("You haven't created your playlist yet .Enter the songs name to create your playlist !") ;
            var list ="";
            for(var i=0 ; i<6 ; i++)
            {
              var n = prompt("Enter the name : ") ;
              list = list+n+";";

              if(confirm("Would you like to continue ?"))
              {
                continue;
              }
              else
              {
                break ;
              }
              
              
            }
            localStorage.setItem(name,list) ;
            setTimeOut(
              function()
              {
                  window.location.href="playlist.php" ;
              } , 6000
            )
           
            
        
    }

  }
</script>
</html>