<?php
$delKey=$_GET['delKey'];

header("content-type:text/html;charset=utf-8");
$connect=mysqli_connect('localhost','root','WenZE7487./','wall');
mysqli_query($connect,'SET NAMES utf8');

$delSql="DELETE FROM wish WHERE id='$delKey'";
mysqli_query($connect,'SET NAMES utf8');
//获取数据库删除记录的布尔值，并做出提示
$state=mysqli_query($connect,$delSql);
if($state){
  ?>
  <script type="text/javascript">alert("留言删除成功");</script>;
<?php }
else{?>
  <script type="text/javascript">alert("留言删除失败");</script>;
<?php }
mysqli_close($connect);
?>
 <script type="text/javascript">
   window.location.href="index.php";
 </script>
