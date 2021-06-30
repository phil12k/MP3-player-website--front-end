<html>
    <head>
    </head>

    <body style="background-image:url('concert.jpg');background-repeat: no-repeat;
  background-size: cover;">

        <?php

            $conn = mysqli_connect('localhost','root','9148050536','signup') ;
            $query = "SELECT * FROM signup ORDER BY ID DESC LIMIT 1" ;
            $result = mysqli_query($conn,$query);

            $row = mysqli_fetch_all($result,MYSQLI_ASSOC) ;
            $name = $row[0]["UserName"];





        ?>
        <h1 style="color:whitesmoke;"><?php  echo $name   ?>, Welcome to the world of Music !<h1>
        <br><br><br>
    

        <script>
        setTimeout(function () {
                        window.location.href= 'second.php';
                                                }, 8000);
</script>
        </script>
    </body>
</html>