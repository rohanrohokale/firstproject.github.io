<?php

$con = mysqli_connect('localhost','root');
if($con)
{
    echo "connection sucessful";
}
else
{
    echo "no connection";
}
?>