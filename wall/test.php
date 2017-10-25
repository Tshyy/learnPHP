<?php
header("content-type:text/html;charset=utf-8");
$connect=@mysqli_connect('localhost','root','WenZE7487./','wall');
mysqli_query($connect,'SET NAMES utf8');
if(!$connect){
  exit('error('.mysqli_connect_errno().'):'.mysqli_connect_error());
}
$result=mysqli_query($connect,'SELECT * FROM wish');
while($row=mysqli_fetch_assoc($result)){
  $data[]=$row;
}
var_dump($data);
mysqli_close($connect);
?>
