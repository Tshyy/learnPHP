<!-- 删除留言模块 -->
<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
$delKey=$_GET['delKey'];//接收操作对象的键名
$filename="msg.txt";
$msgs=[];
//检测文件是否存在
if(file_exists($filename)){
  //读取文件中的内容
  $string=file_get_contents($filename);
  if(strlen($string)>0){
    $msgs=unserialize($string);
  }
}
// 将操作对象从数组中删除
unset($msgs[$delKey]);
// 将删除操作对象之后的数组保存
$msgs=serialize($msgs);
if(file_put_contents($filename,$msgs)){
  echo "<script>alert('删除成功！');location.href='index.php';</script>";
}else{
  echo "<script>alert('删除失败！');location.href='index.php';</script>";
}
