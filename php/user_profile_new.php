<?php
    require_once 'connection.php';
    session_start();
    //require_once 'session.php';
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UserProfile</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
<div class="container">

    <!-- HEADER -->
    <header class="block">
        <?php include "header.php"; ?>
    </header>
    <!-- LEFT-CONTAINER -->
    <div class="row">
        <div class="col-sm-3">
            <?php include "left_part.php"; ?>            
        </div>

        <!-- MIDDLE-CONTAINER -->
        <div class="col-sm-9">
            <div class="tweets block"> <!-- TWEETS (MIDDLE-CONTAINER) -->
                <h2 class="titular"><span class="icon zocial-twitter"></span>LATEST TWEETS</h2>
                <div class="tweet first">
                    <p>Ice-cream trucks only play music when out of ice-cream. Well played dad. On <a class="tweet-link" href="#17">@Quora</a></p>
                    <p><a class="time-ago scnd-font-color" href="#18">3 minutes ago</a></p>
                </div>
                <div class="tweet">
                    <p>We are in the process of pushing out all of the new CC apps! We will tweet again once they are live <a class="tweet-link" href="#19">#CreativeCloud</a></p>
                    <p><a class="scnd-font-color" href="#20">6 hours ago</a></p>
                </div>
            </div> 
        </div>
    </div>

</div> <!-- end main-container -->
</body>
