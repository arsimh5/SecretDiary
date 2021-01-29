<?php

    session_start();

    $diaryContent = "";

    if(array_key_exists("id",$_COOKIE) && $_COOKIE['id']) {


        $_SESSION['id'] = $_COOKIE['id'];
    }

    if(array_key_exists("id", $_SESSION) && $_SESSION['id']) {



      
    
        include("connection.php");

        $query= "SELECT diary FROM `users` WHERE id =
       ".mysqli_real_escape_string($link, $_SESSION['id'])."LIMIT 1";

     // $row = mysqli_fetch_array(mysqli_query($link, $query));

     // $diaryContent = $row ['diary'];
    
    }


        else {

            header("Location:secretdiary1.php");
        }

        
        include ("header.php");

        ?>

        <nav class="navbar navbar-light bg-faded navbar-fixed-top">
            <a class="navbar-brand" href="#">Secret Diary </a>

            <div class="pull-xs-right">

            <a href='secretdiary1.php?Logout=1'> <button class="btn btn-success-outline" type="submit">Logout</button></a>

            </div>
        </nav>


        <div class="container-fluid" id="contianerLoggedInPage">

        <textarea id="diary" class="form-control"><?php echo $diaryContent; ?> </textarea>


        </div>


<?php
        include("footer.php");

        ?>


