<?php

$conn=new mysqli('localhost','root','','project');

if($conn->connect_error)
{
    echo "<h1>Connection Error!";
    die;
}
?>