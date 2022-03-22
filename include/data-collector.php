<?php
    session_start();

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';


    // Get the name of the previous page from $_POST.
    $pageID = $_POST["pageID"];

    // Store all data of the last post with the name $pageID in the session.
    $_SESSION[$pageID] = $_POST;

    // output the current $_SESSION to the page.
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';