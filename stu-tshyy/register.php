<?php
include_once "./lib/lib.php";
header('content-type:text/html;charset=utf-8');
//define('APPROOT', str_replace('\\', '/', dirname(__FILE__)));
if(!empty($_POST['name'])){

  $mysqli=new mysqli('localhost',"root","",'stuadmin');
  $r1=$mysqli->query('set names utf8');


  $name=trim($_POST['name']);
  $number=intval($_POST['number']);
  $email=trim($_POST['email']);
  $money=floatval($_POST['money']);
  $des=trim($_POST['des']);

  $time=date("YmdHis");
  $pic= './upload2017/'.$number.$_FILES['pic']['name'];

  imgUpload($_FILES['pic'],$number);

  $sql="INSERT INTO students (name,number,email,money,info,face) VALUE ('{$name}',{$number},'{$email}',{$money},'{$des}','{$pic}')";


  $mysqli->query($sql);
  $result=$mysqli->affected_rows;
  if($result===1){
    if(!checkLogin()){
      login($name,$number);
      header("Location:index.php");
    }
    else
      header("Location:index.php");
  }
  else{
    "<script>alert('请重新输入')</script>";
  }

}

 ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/site.min.css" rel="stylesheet">
</head>

<body>
    <!--导航栏-->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand hidden-sm" href="index.php">首页</a>
            </div>
        </div>
    </div>
    <!--导航栏结束-->
    <!-- 注册页面 -->
    <div class="container projects">
        <div class="projects-header page-header">
            <h3>注册</h3>
            <a href='login.php'><button type="submit" class="btn btn-primary btn-default">去登陆</button></a>
        </div>
        <!--注册框-->
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" id='reg-form'>
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >姓名</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="请输入姓名" name='name' id='name'>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label ">学号</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="请输入学号" name='number' id='number'>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="请输入正确邮箱" name='email' id='email'>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">金钱</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="请输入数字" name='money' id='money'>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" >头像</label>
                  <div class="col-sm-10">
                      <input type="file" accept="image/png,image/gif,image/jpeg" name='pic' id='pic'>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">个人简介</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="2"  placeholder="不超过50字" name='des' id='des'></textarea>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary btn-default">提交</button>
                      <button type="submit" class="btn btn-default">重置</button>
                  </div>
              </div>
              </form>
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
<script >
 $(function () {
    $('#reg-form').submit(function inputVerify() {
        var name = $('#name').val();

        var number = $('#number').val();
        var patern_num =/^\d+$/;
        var legalnumber=patern_num.test(number);

        var email=$('#email').val();
        var patern_email=/[\da-z]+([\._\-]*[\da-z]+)*@[\da-z]+([\.\-][\da-z]+)*\.[a-z]+/i;
        var legalemail=patern_email.test(email);

        var money=$('#money').val();
        var patern_mon=/^\d{1,9}\.\d\d|^\d{1,9}/;
        var legalmoney=patern_mon.test(money);

        var pic=$('#pic').val();
        var des=$('#des').val();


        $('.alert').alert('close');

        if (name == '' || name.length <= 0) {
           $('#reg-form').append('<div class="alert alert-warning" role="alert">姓名不能为空</div>');
           $('#name').focus();
            return false;
        }
        if (!legalnumber ) {
           $('#reg-form').append('<div class="alert alert-warning" role="alert">学号非法</div>');
            $('#number').focus();
            return false;
        }
        if (!legalemail) {
          alert('email');
           $('#reg-form').append('<div class="alert alert-warning" role="alert">邮箱地址非法</div>');
             $('#email').focus();
            return false;
        }
        if (!legalmoney) {
          alert('money');
           $('#reg-form').append('<div class="alert alert-warning" role="alert">余额为空或非法</div>');
             $('#money').focus();
            return false;
        }
        if (pic === '') {
          alert('pic');
           $('#reg-form').append('<div class="alert alert-warning" role="alert">请上传图像</div>');
           $('#pic').focus();
            return false;
        }

        if (des == '' || des.length <= 0) {
          alert('des');
           $('#reg-form').append('<div class="alert alert-warning" role="alert">简介不能为空</div>');
             $('#des').focus();
            return false;
        }
        return true;
    })
  })
</script>
</html>
