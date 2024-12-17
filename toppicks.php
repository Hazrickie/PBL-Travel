<?php
    session_start();
    include("assets/includes/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Picks</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--styling for background image-->

    <style>
        body {
            background-image: url('assets/images/bg_website/toppicks.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .imgpicks {

            border-style: solid;
            border-width: 3px;
            border-radius: 20px;
                    
        }

        .titlepicks h3 {
            color: white;
    font-family: 'Playlist Script';
    font-size: 6em;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-weight: lighter;
    
}

.pick_index1{

    margin: 50px;
}





#toppicks {
    font-family: 'Poppins', 'Arial', sans-serif;
    
    margin-right: 50px;
    margin-left: 50px;
    background-color: #fff;
    color: black;
    padding: 25px;
    border-radius: 50px;
    
}

#toppicks h3 {
font-size: 40px;
    
}
#toppicks p {
font-size: 20px;
    
}

.places{

    display: flex;
}



.infpicks{

    margin:20px;
    
}

.infpicks a {
    background-color: #fff;
    padding: 4px 5%;
    color: #000;
    font-family: 'Poppins', 'Arial', sans-serif;
    font-size: 1.5em;
    border-radius: 30px;
    border: #000 3px solid;
    text-decoration: none;
    letter-spacing: 3px;
}


    </style>

</head>
<body>
    <?php
        include("assets/includes/header.html");
    ?>



<section class="pick_index1">
<div class="titlepicks"><h3 >Top Picks</h3></div>

<div id="toppicks">

<div class="places"><img  class="imgpicks" src='assets/images/cameron.jpg'width='500px'>

<div class="infpicks">
<h3>Cameron Highlands</h3>
<br>
<p>Cameron Highlands is a popular hill station located in the state of Pahang, Malaysia. It is renowned for its cool climate, lush greenery, and scenic landscapes, making it a favorite retreat for locals and tourists seeking respite from Malaysia's tropical heat.</p>
<br>
<div><a href="#blabla">Book</a></div>
    </div>
</div></div><br>


    <div id="toppicks">

    <div class="places">

<div class="infpicks">
<h3>Langkawi</h3>
<br>
<p>Langkawi is an archipelago of 99 islands (plus 5 temporary islands visible during low tide) located in the Andaman Sea off the northwest coast of Malaysia, in the state of Kedah. Officially known as Langkawi, the Jewel of Kedah (Langkawi Permata Kedah), it is renowned for its stunning natural beauty, pristine beaches, and vibrant tourism scene.</p><br>
<div><a href="#blabla">Book</a></div></div>

<img  class="imgpicks" src='assets/images/langkawi.jpg'width='500px'>
    </div>
</div><br>


<div id="toppicks">

<div class="places"><img  class="imgpicks" src='assets/images/perhentian.jpg'width='500px'>

<div class="infpicks">
<h3>Perhentian Islands</h3>
<br>
<p>
Perhentian Islands are a group of small, idyllic islands located off the northeastern coast of Peninsular Malaysia, in the state of Terengganu. Known for their crystal-clear waters, white sandy beaches, and vibrant marine life, the Perhentian Islands are a popular destination for beach lovers, snorkelers, and scuba divers.</p><br>
<div><a href="#blabla">Book</a></div>
    </div>
</div></div><br>


<div id="toppicks">

<div class="places">

<div class="infpicks">
<h3>Pangkor Islands</h3>
<br>
<p>Pangkor Island (Pulau Pangkor) is a small, picturesque island located off the west coast of Peninsular Malaysia, in the state of Perak. Known for its relaxing atmosphere, pristine beaches, and local charm, Pangkor Island is a favorite destination for travelers seeking a peaceful getaway.</p><br>
<div><a href="#blabla">Book</a></div></div>

<img  class="imgpicks" src='assets/images/pangkor.jpg'width='500px'>
</div>
</div><br>
</section>

<?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>

<?php

    mysqli_close($conn);
?>

