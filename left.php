<!DOCTYPE html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Sunshiney&display=swap" rel="stylesheet">
            <style>
                .home_buttons {
                    font-size: 25px ;
                }

                * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 2px solid rgb(166, 226, 213);
  border-radius: 50px;
  margin-top: -1px; /* Prevent double borders */
  background-color: #3b4447;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: rgb(17, 192, 26);
  display: block ;
  font-family: 'Sunshiney', cursive;
  font-family: 'Josefin Sans', sans-serif;
  font-weight:bolder ;
}

#searchsongs {
  color: rgb(207, 126, 34);

}

#myUL li a:hover:not(.header) {
  background-color: rgb(83, 77, 77);
  color: rgb(230, 227, 233); }
            </style>
    </head>

    <body>
            <h2 id="searchsongs">Search Songs</h2>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
  <li><a href="#" onclick="window.top.location.href='ArijitSingh.php'">Arijit Singh</a></li>
  <li><a href="#">Marshmallow</a></li>

  <li><a href="#">Imagine Dragons</a></li>
  <li><a href="#">Nightcore</a></li>

  <li><a href="#">Phoenix</a></li>
  <li><a href="#">Eminem</a></li>
  <li><a href="#">Linkin Park</a></li>
</ul>
        <div id="left_iframe_div" >
            <button class="home_buttons" style="font-size:35px;width:15%;float:left;color:rgb(30,215,96);margin:0;padding:0;"><i class="fa fa-spotify" aria-hidden="true" >MusicLib</i></button>
            <button class="left_iframe_buttons" id="checklib" 
            onclick="window.top.location.href='library.php'" ><i class="fa fa-book" aria-hidden="true" style="margin-right:10px;">
          </i>Library</button>
        </div>
        
        <div style="height:50px; margin-bottom: 10px;">
             <b style="color:cornsilk;font-size:50px;">   Music for everyone . </b>
        </div>

        <script>
                function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
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

<?php

            $conn = mysqli_connect('localhost','root','9148050536','signup') ;
            $query = "SELECT * FROM signup ORDER BY ID DESC LIMIT 1" ;
            $result = mysqli_query($conn,$query);

            $row = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
            $name = $row[0]["UserName"];
?>




    </body>
</html>