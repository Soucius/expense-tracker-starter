<?php

    session_start();

    if (isset($_SESSION["user"])) {
        session_destroy();
        header("location:login.php");
    } else {
        header("location:index.php");
        exit();
    }