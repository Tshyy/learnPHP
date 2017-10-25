<?php
include_once './lib/fun.php';
session_start();
$_SESSION['user'] = '';
if(!checkLogin()){
    msg(1,"退出成功","index.php");
}
else {
  msg(2,"退出失败","index.php");
}
