<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		render("register-form.php",["title"=>"Register"]);
	}
	
	else{
		if(empty($_POST["name"])||empty($_POST["email"])||empty($_POST["password"])){
			apologize("Username,E-mail,Password cannot be left Blank.");
		}

		else{
			$conn=dbconnect();
			
                        $_POST["name"]=mysqli_real_escape_string($conn, $_POST["name"]);
                        $_POST["email"]=mysqli_real_escape_string($conn, $_POST["email"]);
			if($conn->connect_error){
				die("Connection Failed".$conn->conncet_error);
			}
			else{
				$query ="INSERT INTO users(name,email,password) VALUES('".$_POST['name']."','".$_POST['email']."','".password_hash($_POST['password'],PASSWORD_DEFAULT)."');";
				$rows = $conn->query($query);
				if($rows == 0){
					apologize("E-mail already registered.");
				}
				else{
					$_SESSION['id']=$conn->insert_id;
					redirect("index.php");
				}
			}
		}
	}
?>