<?php
	require("../includes/config.php");
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		render("login-form.php",["title" => "Login"]);
	}
	
    else if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["email"]) || empty($_POST["password"])){
			apologize("Email And Password Can't be left Empty");
		}
		
		else{
			$conn =dbconnect();


			if($conn->connect_error){
				die("Connection Failed".$conn->conncet_error);
			}

			else{
                                
			        $_POST["email"]=mysqli_real_escape_string($conn,$_POST["email"]);
                                $_POST["password"]=mysqli_real_escape_string($conn,$_POST["password"]);
				$query = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
				$result = $conn->query($query);

				if ($result->num_rows > 0) {
					$row= $result->fetch_assoc();
                                        if (password_verify($_POST["password"], $row["password"])) {
					   $_SESSION['id']=$row['id'];
					   redirect("index.php");
                                        }
                                        else {
					    apologize("Invalid Password.");
				        }
				}
				else {
					apologize("Invalid Username/Password.");
				}
			}
		}
	}

?>