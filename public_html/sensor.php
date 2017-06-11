<?php
        require('../includes/config.php');
	$conn=dbconnect();
	if(empty($_GET['rgb'])||empty($_GET['balarm'])){
		$query="SELECT * FROM status WHERE id=1";
		$res=$conn->query($query);
		$go=$res->fetch_assoc();
                $data[]=['rgb'=>$go['rgb'],'balarm'=>$go['balarm']];
		render("sensor.php",['title'=>'Status','data'=>$go]);
	}
	else{
             
		if(!empty($_GET['balarm'])){
                $query="UPDATE status SET balarm='".$_GET['balarm']."' WHERE id=1";
                $conn->query($query);
                } 
                if(!empty($_GET['rgb'])){
                $query="UPDATE status SET rgb='".$_GET['rgb']."' WHERE id=1";
                $conn->query($query);
                echo "<b>1</b>";
                }
	}
?>