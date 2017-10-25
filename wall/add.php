<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');

$idvalue=$_POST['idvalue'];
//如果用户没有选择颜色，设置愿望纸默认类型
if($idvalue==''){
  $idvalue='a5';
}
$content=$_POST['textfont'];
$author=$_POST['name'];
$nowTime=date("Y-m-d H:i");
$addSql="INSERT wish VALUE(NULL,'$idvalue','$content','$author','$nowTime') ";

$connect=@mysqli_connect('localhost','root','WenZE7487./','wall');
mysqli_query($connect,'SET NAMES utf8');

//获取数据库添加记录的布尔值，并做出提示
$state=mysqli_query($connect,$addSql);
if($state){
  ?>
  <script type="text/javascript">alert("留言成功");</script>;
<?php }
else{?>
  <script type="text/javascript">alert("留言失败");</script>;
<?php }
mysqli_close($connect);
?>

<script type="text/javascript">
  window.location.href="index.php";
</script>
