<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
$filename="msg.txt";
$msgs=[];
//检测文件是否存在，并读取文件内容
if(file_exists($filename)){
  $string=file_get_contents($filename);
  if(strlen($string)>0){
    $msgs=unserialize($string);
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
					慕课留言板
				</h1>
				<p>
					慕课网是垂直的互联网IT技能免费学习网站。以独家视频教程、在线编程工具、学习计划、问答社区为核心特色。
          在这里，你可以找到最好的互联网技术牛人，也可以通过免费的在线公开视频课程学习国内领先的互联网IT技术。
				</p>
				<p>
					<a rel="nofollow" class="btn btn-primary btn-large" href="https://www.imooc.com">慕课网首页 »</a>
				</p>
			</div>
      <?php if(is_array($msgs)&&count($msgs)>0):?>
			<table class="table">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							用户名
						</th>
						<th>
							标题
						</th>
						<th>
							时间
						</th>
            <th>
							内容
						</th>
            <th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1;foreach($msgs as $key=>$val):?>
            <tr class="success">
              <td>
                <?php echo $i++;?>
              </td>
              <td>
                <?php echo $val['username'];?>
              </td>
              <td>
                <?php echo $val['title'];?>
              </td>
              <td>
                <?php echo date("m/d/Y H:i:s",$val['time']);?>
              </td>
              <td>
                <?php echo $val['content'];

                ?>
              </td>
              <td>
                <!-- 建立“编辑”和“删除”操作，并把操作对象的键名$key传到相应模块 -->
                <a href="edit.php?editKey=<?php echo $key ?>">编辑</a>
                |
                <a href="javascript:;" onclick="(confirm('确认要删除吗') ? (location.href='delete.php?delKey=<?php echo $key ?>'): false)">删除</a>

              </td>
            </tr>
          <?php endforeach;?>
				</tbody>
			</table>
    <?php endif;?>
    <form action="add.php" method="post" id="pusBtn">
      <input type="submit" class="btn btn-primary btn-lg" name="addMsg" value="发布留言" />
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
