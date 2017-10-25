<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>许愿墙</title>
	<link rel="stylesheet" href="./Css/index.css" />
	<script type="text/javascript" src='./Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='./Js/index.js'></script>
</head>
<?php
header("content-type:text/html;charset=utf-8");
$connect=@mysqli_connect('localhost','root','WenZE7487./','wall');
mysqli_query($connect,'SET NAMES utf8');
$result=mysqli_query($connect,'SELECT * FROM wish');
while($row=mysqli_fetch_assoc($result)){
  $data[]=$row;
}

mysqli_close($connect);
 ?>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>
	<div id='main'>
		<?php foreach($data as $v){?>
		<dl class='paper <?php echo $v['paperClass']?>'>
			<dt>
				<span class='username'><?php echo $v['author'] ?></span>
				<span class='num'>No.<?php echo $v['id']?></span>
			</dt>
			<dd class='content'><?php echo $v['content']?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo $v['addTime']?></span>
				<a href="javascript:;" onclick="(confirm('确认要删除吗') ? (location.href='del.php?delKey=<?php echo $v['id'] ?>'): false)" class='close'></a>
			</dd>
		</dl>
	<?php }?>

	</div>


<!--[if IE 6]>
    <script type="text/javascript" src="./Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>
