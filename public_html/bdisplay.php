<?php
$my_file='../storage/bLog.txt';
if(file_exists($my_file)){
    $my_file='../storage/bLog.txt';
    $fp=fopen($my_file,'r');
    $data=fread($fp,filesize($my_file));
    echo $data;
}
else{
    echo '<div><b>'.'0'.'</b>'.'<b>'.'0'.'</b>'.'<b>'.'0'.'</b></div>';
}
?>