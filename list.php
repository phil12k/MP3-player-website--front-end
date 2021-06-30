<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="javaScript.js"></script>
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
    </head>

    <body  style="background-color: rgb(5, 5, 5);background-repeat: no-repeat;padding: 0;margin:0;">
            <div style="font-size:30px;color:white;margin-top:10px;width:300px;display:inline-block;">
                <i class="fa fa-arrow-left" onclick="window.location.href='for_middle_iframe.php'"
                 aria-hidden="true"></i>Go Back</div>
                

            <div style="display:block;">
                <div style="width:100%;margin:10px;padding:10px;height:200px;margin-right:0;">
                        <div><img style="height:200px;width:280px;margin:0;float:left;" src="music1.jpg"></div>
                        <div>
                                <button onclick="playAll('playall')" ondblclick="pauseAll('playall')"   id="playall"
                                style="width:250px;height:50px;margin-left: 10px;
                                background:none;color:whitesmoke;font-weight:bolder;font-size: 30px;
                                border:2px solid whitesmoke">Play Album</button>
                        </span>
                        </div> 
                </div>
                <div id="songslist">
                <div class="names" id="1" style="cursor:pointer;"
                onclick="playWhileOtherIsAlsoPlaying('1')"
                ondblclick="pause('1')">All is Well<audio>
                    <source src="Aal is well.mp3">
                </audio>
                </div>
                <div class="names" id="2"  style="cursor:pointer;"
                   onclick="playWhileOtherIsAlsoPlaying('2')"
                 ondblclick="pause('2')">Wo Ladki Hai Kahan<audio>
                    <source src="Wo Ladki Hai Kahan.mp3">
                </audio>
                </div>
                <div class="names" id="3" style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('3')"
                 ondblclick="pause('3')">Thunder<audio>
                <source src="Thunder.mp3">
                </audio>
                </div >
                <div class="names" id="4" style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('4')"
                 ondblclick="pause('4')">Belageddu<audio>
                <source src="Belageddu.mp3">
                </audio>
                </div >
                <div class="names" id="5"   style="cursor:pointer;"
                  onclick="playWhileOtherIsAlsoPlaying('5')"
                 ondblclick="pause('5')">Jaane Nahi denge Tujhe<audio>
                <source src="Jaane Nahin Denge Tujhe.mp3">
                </audio>
                </div>
                <div class="names" id="6" style="cursor:pointer;"
                onclick="playWhileOtherIsAlsoPlaying('6')"
                 ondblclick="pause('6')">Safar<audio>
                    <source src="Safar.mp3">
                </audio>
                </div>
            </div>
            </div>
    </body>
</html>