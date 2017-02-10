<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>E$PHA: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>E$PHA IOT</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>
    <?php
        if (!in_array($_SERVER["PHP_SELF"], ["/wstation.php"])){
        echo '<body background="img/bkg.jpg" style="background-size:100%">';
        }
        else{
        echo '<body background="img/bkg.jpg" style="background-size:100%" onload="javascript:search('."'Jaipur'".');">';
        }
    ?>

    

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="E$PHA IOT" src="/img/logo.png"/></a>
                </div>
				
				<!--<?php if (!empty($_SESSION["id"])){
			$conn = dbconnect();
			$query="SELECT * FROM users WHERE id=".$_SESSION['id'].";";
			$result = $conn->query($query);
			if($result->num_rows >0){
					$row = $result -> fetch_assoc();
					echo "<h3>Welcome ".$row['name']."</h3><br><br>";
				}
			} 
			?>-->
				
				
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        
                        <li><a href="index.php"><strong>HOME</strong></a></li>
                        <li><a href="rgb.php">RGB LED</a></li>
                        <li><a href="wstation.php">WEATHER STATION</a></li>
                        <li><a href="bAlarm.php">BURGLAR ALARM</a></li>
						<li>
						<?php if (!empty($_SESSION["id"])){
						$conn = dbconnect();
						$query="SELECT * FROM users WHERE id=".$_SESSION['id'].";";
						$result = $conn->query($query);
							if($result->num_rows >0){
							$row = $result -> fetch_assoc();
                                                        echo '<a href="#">';
							echo '<strong>HI '.strtoupper($row['name']).'</strong>';
                                                        echo '</a>';
							}
						} 
						?>
						</li>
                        <li><a href="https://www.google.com" target="_blank">GOOGLE</a></li>
                        <!--<li><a href="https://www.facebook.com" target="_blank">FACEBOOK</a></li>-->
                        <li><a href="https://www.linkedin.com/in/arun-siddharth-a5709a123/" target="_blank">ABOUT CREATOR</a></li>
                        <li><a href="logout.php"><strong>LOG OUT</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">