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
            background-image: url('assets/images/bg_website/survey.jpg');
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


<section class="sec_index2">
            <h3 class="titlepicks">Survey</h3>
            <div id="index-survey">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <label>What type of places do you like to explore?</label> <br>
                    <input type="radio" name="q1" value="Nature"> Nature (e.g., beaches, waterfalls, mountains) <br>
                    <input type="radio" name="q1" value="Cultural heritage"> Cultural heritage (e.g., museums, historical sites) <br>
                    <input type="radio" name="q1" value="Food spots"> Food spots (e.g., street food, restaurants, cafes) <br>
                    <input type="radio" name="q1" value="Entertainment"> Entertainment (e.g., theme parks, nightlife, shopping malls) <br><br>

                    <label>What is your budget range for exploring places?</label> <br>
                    <input type="radio" name="q2" value="Free - RM99"> Free - RM99 <br>
                    <input type="radio" name="q2" value="RM100 - RM299"> RM100 - RM299 <br>
                    <input type="radio" name="q2" value="RM300+"> RM300+ <br><br>

                    <label>What is your number of family?</label> <br>
                    <input type="radio" name="q3" value="1-3"> 1-3 peoples <br>
                    <input type="radio" name="q3" value="4-7"> 4-7 peoples <br>
                    <input type="radio" name="q3" value="7+"> 7+ peoples <br><br>

                    <label>What is the ideal duration for a vacation?</label> <br>
                    <input type="radio" name="q4" value="1-2"> 1-2 days <br>
                    <input type="radio" name="q4" value="3-5"> 3-5 days <br>
                    <input type="radio" name="q4" value="6+"> 6+ days <br><br>

                    <input type="submit" name="confirm" value="Submit your answers!" id="submit">
                </form>
            </div>
        </section>


    </body>
    </html>