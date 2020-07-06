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
mysqli_select_db($con, 'rohanproject');


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "insert into userinf (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";
mysqli_query($con, $query );

echo "$query";
 
mysqli_query($con, $query);

header('location:index.php');

?>
