<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/
$config =array(
		//change it
		"base_url" => "https://espha.000webhostapp.com/hybridauth/index.php", 
		"providers" => array ( 

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "490408364665-e1fokg6a7i78ibrlm3lr2uqvuv2cr4j7.apps.googleusercontent.com", "secret" => "8eVUbkphIiv_MlTZ_q0Twmry" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "1836789833261016", "secret" => "b6b631247f7bd91419c58965b1ab517a" ), 
			),
		),
		"debug_mode" => false,
		"debug_file" => "",
	);