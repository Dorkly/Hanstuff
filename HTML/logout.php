<?php
if ( !isset($_SESSION) ) session_start();
    include("config.php");
    $sqlupdate = "UPDATE  auth_user SET is_active = 0 WHERE lower(username) = lower('$_SESSION[login_user]')";
    mysqli_query($db,$sqlupdate);

    Session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
