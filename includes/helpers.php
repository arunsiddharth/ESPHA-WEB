<?php

    /**
     * helpers.php
     *
     
     * Helper functions.
     */
    date_default_timezone_set("Asia/Kolkata");
    require_once("config.php");

    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
    }

    function logout(){
		$_SESSION=[];
		
		if(!empty($_SESSION[session_name()])){
			setCookie(session_name,"",time()-3600);
		}
		session_destroy();
		redirect("login.php");
	}

   
	function redirect($location){
		header("Location: {$location}");
		exit;
	}

    function render($view, $values = []){
		if(file_exists("../views/{$view}")){
			extract($values);
			require("../views/header.php");
			require("../views/{$view}");
			require("../views/footer.php");
			exit;
		}
		else{
			trigger_error("Invalid View:{$view}",E_USER_ERROR);
		}
	}
	function dbconnect(){
		$server = "localhost";
		$username = "id637674_root";
		$password = "asd59632";
		$dbname ="id637674_intern";
		
		return mysqli_connect($server, $username, $password, $dbname);
	}

?>
