<?php
$con = mysqli_connect('localhost','root','','login');
if(!$con):
    echo 'database not connected';
    die();
endif;
?>