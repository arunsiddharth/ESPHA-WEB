<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		render("bAlarm-form.php",["title" => "Burglar Alarm"]);
	}
	
    else if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(!isset($_POST['state']) || empty($_POST["mins"])){
			apologize("State And Minutes can't be left Empty");
		}
		
		else{
			if(!empty($_POST["hrs"])){
                        $_POST["hrs"]=(int)$_POST["hrs"];
                        $_POST["mins"]=60*(int)$_POST["hrs"]+(int)$_POST["mins"];
			}
                        $conn=dbconnect();
                        $query="UPDATE status set balarm='ON' WHERE id=1";
                        $conn->query($query);
			$my_file="../storage/bLog.txt";
			$fp=fopen($my_file,"w") or die('Cannot open file:  '.$my_file);
			$data='<div><b>'.$_POST["state"].'</b>'.'<b>'.$_POST["mins"].'</b>';
			fwrite($fp,$data);
			render("bAlarm-form.php",["title"=>"Burglar Alarm"]);
		}
	}

?>