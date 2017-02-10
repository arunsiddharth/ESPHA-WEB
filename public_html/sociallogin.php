<?php
        include('../includes/socialconfig.php');
		include('../includes/config.php');
        include('hybridauth/Hybrid/Auth.php');
        if(isset($_GET['provider']))
        {
        	$provider = $_GET['provider'];
        	
        	try{
        	
        	$hybridauth = new Hybrid_Auth( $config );
        	
        	$authProvider = $hybridauth->authenticate($provider);

	        $user_profile = $authProvider->getUserProfile();
	        
			if($user_profile && isset($user_profile->identifier))
	        {
				  $conn =dbconnect();
			
					if($conn->connect_error){
						die("Connection Failed".$conn->conncet_error);
					}
					else{
						$query = "SELECT * FROM users WHERE email='".$user_profile->email."'";
						echo $query;
						$result = $conn->query($query);
						if ($result->num_rows > 0) {
							//login
							$row= $result->fetch_assoc();
							$_SESSION['id']=$row['id'];
							redirect("index.php");
						}
						else {
							//redirect
							$query ="INSERT INTO users(name, email, oauth_uid, oauth_provider ) VALUES('".$user_profile->displayName."','".$user_profile->email."','".$user_profile->identifier."','".$_GET['provider']."');";
							$rows = $conn->query($query);
							$_SESSION['id']=$conn->insert_id;
							redirect("index.php");
						}
					}
	        }	        

			}
			catch( Exception $e )
			{ 
			
				 switch( $e->getCode() )
				 {
                        case 0 : echo "Unspecified error."; break;
                        case 1 : echo "Hybridauth configuration error."; break;
                        case 2 : echo "Provider not properly configured."; break;
                        case 3 : echo "Unknown or disabled provider."; break;
                        case 4 : echo "Missing provider application credentials."; break;
                        case 5 : echo "Authentication failed. "
                                         . "The user has canceled the authentication or the provider refused the connection.";
                                 break;
                        case 6 : echo "User profile request failed. Most likely the user is not connected "
                                         . "to the provider and he should to authenticate again.";
                                 $twitter->logout();
                                 break;
                        case 7 : echo "User not connected to the provider.";
                                 $twitter->logout();
                                 break;
                        case 8 : echo "Provider does not support this feature."; break;
                }

                echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

                echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";

			}
        
        }
?>