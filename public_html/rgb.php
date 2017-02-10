<?php

// configuration
    require("../includes/config.php"); 

if($_SERVER["REQUEST_METHOD"] == "GET"){
    render("form.php",["title"=>"IOT RGB"]);

}
elseif($_SERVER["REQUEST_METHOD"] == "POST"){
    $my_file="../storage/rgblog.txt";
    $fp=fopen($my_file,"w") or die('Cannot open file:  '.$my_file);
    $rgb=hex2rgb($_POST['favcolor']);
    //$data='<div><b>'.$_POST['red'].'</b>'.'<b>'.$_POST['green'].'</b>'.'<b>'.$_POST['blue'].'</b></div>';
    $data='<div><b>'.$rgb[0].'</b>'.'<b>'.$rgb[2].'</b>'.'<b>'.$rgb[1].'</b></div>';
    fwrite($fp,$data);
    
    
    
    render("form.php",["title"=>"IOT RGB"]);
}
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
?>