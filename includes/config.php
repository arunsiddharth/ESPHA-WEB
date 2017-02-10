<?php

    /**
     * config.php
     *
     * Configures app.
     */

	
    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

	
    // enable sessions
    session_start();
	
    // requirements
    require("helpers.php");


    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php", "/register.php","/sociallogin.php","./rgbdisplay.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }
	

?>