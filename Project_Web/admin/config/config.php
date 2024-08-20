<?php
    $mysqli = new mysqli("localhost","root","hanh2003@Az","uoolo_35506633_webbanhang");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Error:TRuy xuất lỗi " . $mysqli -> connect_error;
    exit();
    }
?>