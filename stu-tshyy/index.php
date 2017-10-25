<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );
header('content-type:text/html;charset=utf-8');
include_once './lib/lib.php';
$login=checkLogin()?1:0;
$loginStuNum=isset($_SESSION['user']['number'])?intval($_SESSION['user']['number']):'';
$mysqli=new mysqli('localhost',"root","",'stuadmin');
$mysqli->query('set names utf8');
$sql = "SELECT * FROM `students` ORDER BY `regtime` DESC";
$result=$mysqli->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

$Content=isset($_GET['key'])?trim($_GET['key']):'';

if(!empty($Content)){
  echo "<script>alert('$Content')</script>";
  $sqlSearch="SELECT * FROM `students` WHERE `name` LIKE '%$Content%'";
  $resultSearch=$mysqli->query($sqlSearch);
  $dataSearch=$resultSearch->fetch_all(MYSQLI_ASSOC);

  if(is_array($dataSearch) && !empty($dataSearch)){
    $data=$dataSearch;
  }
}

 ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学生转账管理系统</title>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/site.min.css" rel="stylesheet">
    <style>
    .container.row.col-lg-4 img{ display: block; margin-left: auto; margin-right: auto; }
    .container.row.col-lg-4 h3,p{ text-align: center; }
    .row.col-lg-4.button{ width: 360px; margin-left: 150px; margin-bottom: 10px;}
    </style>
</head>

<body>
    <!--导航栏-->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand hidden-sm" href="index.php">首页</a>
                <?php if($login==1):?>
                <a class="navbar-brand hidden-sm"><?php echo $_SESSION['user']['name'].",欢迎您！"?></a>
              <?php endif;?>
            </div>
        </div>
    </div>
    <!--导航栏结束-->
    <!--巨幕-->
    <div class="jumbotron masthead">
        <div class="container">
          <h1>学生转账管理系统</h1>
          <h2>实现学生转账功能</h2>
            <p class="masthead-button-links">
                <form class="form-inline" action="#" method="get" id='search'>
                    <div class="form-group">
                        <input type="text" class="form-control" id="serchinput" placeholder="输入搜索内容" name="key" value="">
                        <button class="btn btn-default" type="submit">搜索</button>
                        <?php if(!$login):?>
                          <a href="register.php?act=register"><button type="button" class="btn btn-primary btn-default" data-toggle="modal">  注册  </button></a>
                          <a href="login.php?act=login"><button type="button" class="btn btn-primary btn-default" data-toggle="modal">  登录  </button></a>
                        <?php else: ?>
                          <a href="out.class.php"><button type="button" class="btn btn-primary btn-default" data-toggle="modal">  退出  </button></a>
                      <?php endif;?>
                    </div>
                </form>
            </p>
        </div>
    </div>
    <!--巨幕结束-->
    <!-- 模态框 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <form class="form-inline" action="" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">转账</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                          收款人：
                          <select class="form-control" id='receiver'>
                            <?php foreach($data as $val):?>
                            <option value="<?php echo $val['number']?>"><?php echo $val['name']?></option>
                            <?php endforeach;?>
                          </select>
                        </p>
                        <br />
                        <p>转账金额：<input type="text" class="form-control" id="transferedmoney" placeholder="请输入数字"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit" id="submit" onclick="iflogin();postForm()">确认转账</button>
                        <button class="btn btn-primary" type="reset" id="reset">重置</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--模态框结束-->
    <div class="container projects">
        <div class="projects-header page-header">
            <h2>用户展示</h2>
            <p>将用户信息展示在页面中</p>
        </div>
        <!--信息展示-->
        <div class="row">
          <?php foreach($data as $val):?>
            <div class="col-lg-4" id='<?php echo $val['name'];?>'>
                <img class="img-circle" src="<?php echo $val['face'];?>" alt="" width="140" height="140">
                <h3><?php echo $val['name'];?></h3>
                <p><?php echo $val['info'];?></p>
                <div class="button">
                  <button type="button" class="btn btn-primary btn-default" data-toggle="modal" data-target="#myModal" onclick="set('<?php echo $val['number']?>')">  转账  </button>
                </div>
            </div>
          <?php endforeach;?>
        </div>
    </div>
    <footer class="footer  container">
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <h4><a href="http://class.imooc.com" target="_blank">class.imooc.com</a> | 慕课网</h4>
            </ul>
        </div>
    </footer>

</body>
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script type="text/javascript">
var id;
function set(number){
  id=number;
  $("#receiver").val(id);
}
function iflogin(){
  var login='<?php echo $login?>';
  if(login==='0'){
    alert('请先登录再转账');
  };
  }

  function postForm(){
      var fromTrans='<?php echo $loginStuNum?>';
      var patern_num=/^\d+$/;
      var toTrans=$('#receiver').val();
      var money=$('#transferedmoney').val();
      var patern_mon=/^\d{1,9}\.\d\d|^\d{1,9}/;
      if(fromTrans){
          if(patern_num.test(fromTrans) && patern_num.test(toTrans) && patern_mon.test(money)){
            $.post('./transfer.php',{'fromTrans':fromTrans,'toTrans':toTrans,'money':money},function(data){
              alert(data.msg);
            },'json');
          }
        }
  }
</script>

</html>
