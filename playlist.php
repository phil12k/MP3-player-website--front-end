<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="2ndscript.js"></script>
        <style>
            .playall{
                height: 50px;
                width : 200px ;
                background : none ;
                color:white ;
                font-weight: bolder;
                border:1px solid white ;
            }
        </style>
                    <?php

$conn = mysqli_connect('localhost','root','9148050536','signup') ;
$query = "SELECT * FROM signup ORDER BY ID DESC LIMIT 1" ;
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
$name = $row[0]["UserName"];
?>
<script>
    var name = "<?php echo $name;?>";
    var name = name.trim();
    window.onload = function()
    {

        document.getElementById("songslist").children ;
        res = localStorage.getItem(name).split(";") ;

        for(var x=0 ; x<localStorage.getItem(name).split(";").length-1 ; x++)
        {
            var tochange = document.getElementById(x+1)  ;
                tochange.innerHTML = res[x];
              

        }
        
    }
</script>
    </head>

    <body  style="background-color: rgb(5, 5, 5);background-repeat: no-repeat;padding: 0;margin:0;">
            <div style="font-size:30px;color:white;margin-top:10px;width:300px;display:inline-block;">
                <i class="fa fa-arrow-left" onclick="window.location.href='second.php'"
                 aria-hidden="true"></i>Go Back</div>
                

            <div style="display:block;">
                <div style="width:100%;margin:10px;padding:10px;height:200px;margin-right:0;">
                        <div><img style="height:200px;width:280px;margin:0;float:left;" src="music1.jpg"></div>
                        <div>
                                
                        </span>
                        </div> 
                </div>
                <div id="songslist">
                <div class="names" id="1" style="cursor:pointer;"
                onclick="playWhileOtherIsAlsoPlaying('1')"
                ondblclick="pause('1')">*<audio>
                    <source src="">
                </audio>
                </div>
                <div class="names" id="2"  style="cursor:pointer;"
                   onclick="playWhileOtherIsAlsoPlaying('2')"
                 ondblclick="pause('2')">*<audio>
                    <source src="">
                </audio>
                </div>
                <div class="names" id="3" style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('3')"
                 ondblclick="pause('3')">*<audio>
                <source src="">
                </audio>
                </div >
                <div class="names" id="4" style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('4')"
                 ondblclick="pause('4')">*<audio>
                <source src="">
                </audio>
                </div >
                <div class="names" id="5"   style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('5')"
                 ondblclick="pause('5')">*<audio>
                <source src="">
                </audio>
                </div>
                <div class="names" id="6" style="cursor:pointer;"
                onclick="playWhileOtherIsAlsoPlaying('6')"
                 ondblclick="pause('6')">*<audio>
                    <source src="">
                </audio>
                </div>
            </div>
            </div>

    </body>
</html>