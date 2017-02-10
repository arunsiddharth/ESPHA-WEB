<?php
$my_file='../storage/rgblog.txt';
if(file_exists($my_file)){
    $my_file='../storage/rgblog.txt';
    $fp=fopen($my_file,'r');
    $data=fread($fp,filesize($my_file));
    echo $data;
}
else{
    echo '<div><b>'.'255'.'</b>'.'<b>'.'255'.'</b>'.'<b>'.'255'.'</b></div>';
}

?>