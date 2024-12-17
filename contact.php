<?php
    session_start();
    include("assets/includes/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--styling for background image-->

    <style>
        body {
            background-image: url('assets/images/bg_website/contact.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .team {

            border-style: solid;
            border-width: 3px;
            border-radius: 20px;
            margin: 40px;
            background-color: #389E8D;
            border-color: #389E8D;
        }

        .team h2 {
                    font-size: 45px;
                    font-family:'Pacificos';
    src: url('fonts/Pacificos.otf') format('opentype');
              
}


      .arif img{

        border-radius: 50px;
        border-width: 3px;
        border-style: solid;
        border-color: black;
        max-height: 70%;
        margin: 40px;
      }


      .name{

        font-size:40px;
      }
      .info p{

        font-size: 30px;
      }
      .hazeeq img{

border-radius: 50px;
border-width: 3px;
border-style: solid;
border-color: black;
max-height: 50%;
margin-left: 200px;
margin-top: 30px;


}



      .inteam{

        display: flex;
        margin: 30px;
        padding: 30px;
    
      }


    </style>
</head>
<body>
    <?php
        include("assets/includes/header.html");
    ?>

    <main>
        <div class="sec_upper">
            <section id="sec_upper">
                <h1>Our team!</h1>
                <p id="p1">GET TO KNOW OUR TEAM</p>
                 <br>

                 <div class="team">
                    <h2 align="center" style="font-family: 'TT Chocolates';
    src: url('fonts/TTChocolates.otf') format('opentype');
    font-size:50px;"> The Programmer </h2>


                    
                    <br>
                    <div class="inteam">
                    <div class="arif">

                    <img src='assets/images/arifsigam.jpg' width="510px">
                    <br>
                    <p class="name" align="center">Arif Alaudin</p>

                    <br>
                    <div class="info">
                        <p align="center">Email: arifalau11@gmail.com</p>
                        <p align="center">Phone No: 017-423-4587</p>
    </div>
                
                </div>

                <div class="hazeeq">

                <img src='assets/images/hazeeq.jpg' width="400px">
                <br>
                <br>
                <br>
                <br>

                <p class="name" align= "center">Syazmin Hazeeq</p>
                <br>
                <div class="info">
                    <p align="center">Email: syazzeeq@gmail.com</p>
                    <p align="center">Phone No: 013-254-9568</p>
    </div>

    </div>

    </div>



        
    </main>

    <?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>

<?php

    mysqli_close($conn);
?>