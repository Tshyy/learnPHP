<!-- 新建留言模块  -->
<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
$filename="msg.txt";
$msgs=[];
//检测文件是否存在，存在则读取文件中的内容
if(file_exists($filename)){
  $string=file_get_contents($filename);
  if(strlen($string)>0){
    $msgs=unserialize($string);
  }
}


//检测用户是否点击了编辑完成按钮
if(isset($_POST['pubMsg'])){
  $username=$_POST['username'];
  $title=strip_tags($_POST['title']);
  $content=strip_tags($_POST['content']);
  $time=time();
  //将其组成关联数组
  $data=compact('username','title','content','time');
  array_push($msgs,$data);
  $msgs=serialize($msgs);
  if(file_put_contents($filename,$msgs)){
    echo "<script>alert('留言成功！');location.href='index.php';</script>";
  }else{
    echo "<script>alert('留言失败！');location.href='index.php';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="page-header">
				<h1>
					IMOOC留言板-<span>V2.333</span>
				</h1>
			</div>
			<div class="hero-unit">
        <h1>
 					既然来了，就说点什么吧~~~~
 				</h1>
 				<p>
 					把你想说的都写在下面，标注好你的名字、主题和内容，点击"编辑完成"发送给我们，让小伙伴们都知道你在想些什么。
 				</p>
				<p>
					<a rel="nofollow" class="btn btn-primary btn-large" href="https://www.imooc.com">慕课网首页 »</a>
				</p>
			</div>
      <form action="#" method="post">
        <fieldset>
           <legend>发布</legend>
           <label>用户名</label><input type="text" name="username" required />
           <label>标题</label><input type="text" name="title" required />
           <label>内容</label><textarea name="content" rows="5" cols="30" required></textarea>
           <hr>
           <input type="submit" class="btn btn-primary btn-lg" name="pubMsg" value="编辑完成"/>
           <a class="btn btn-lg" name="lookMsg" href="index.php">查看留言</a>
        </fieldset>
      </form>
      <div>
        <hr/>
        Edited by 天上有云 @2017.06.18
      </hr/>
      </div>
		</div>
	</div>
</div>
</body>
</html>
