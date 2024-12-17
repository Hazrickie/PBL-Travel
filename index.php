<?php
    session_start();
    include("assets/includes/database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--styling for background image-->

    <style>
        body {
            background-image: url('assets/images/bg_website/index.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            
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
                <h1>Welcome, User!</h1>
                <p id="p1">WHERE DO YOU WANT TO TRAVEL TODAY?</p>
                <p id="p2">TRY OUR SURVEY TO FIND OUT</p> <br>
                <div><a href="survey.php">Click here!</a></div>
            </section>
        </div>
        
        <div class="sec_index1">
            <section id="sec_index1">
                <h3>Introduction</h3>
                <div id="index-sec1-cont">
                    <p>Our website is a vacation services business website. This website will gather your information including interest, salary and number of family members to find their most suitable and affordable tourist spot in Malaysia.</p>
                    
                </div>
            </section>
        </div>
        <br>
        <br>
        
        <div class="sec_index3">

       
    </main>

    <?php
        include("assets/includes/footer.html");
    ?>
</body>
</html>

<?php

    mysqli_close($conn);
?>