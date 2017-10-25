<?php
include_once "lib/lib.php";

if(!empty($_POST['name'])){
  if(!checkLogin()){
    $name=isset($_POST['name'])?trim($_POST['name']):"";
    $number=isset($_POST['number'])?trim($_POST['number']):"";
    $number=intval($number);

    $res=login($name,$number);
    if($res)
    header("Location:index.php");
  }
  else{
    echo "<script>alert('请先退出')</script>";
    header("Location:index.php");
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="zh-CN">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>登陆</title>
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
             <h3>登陆</h3>
             <a href='register.php'><button type="submit" class="btn btn-primary btn-default">去注册</button></a>
         </div>
         <!--注册框-->
         <div class="row">
           <div class="col-md-6 col-md-offset-3">
             <form class="form-horizontal" id="login-form"action="#" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <label for="inputEmail3" class="col-sm-2 control-label"  >姓名</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" placeholder="请输入姓名" name='name' id="name" >
                   </div>
              </div>
               <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label"  >学号</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" placeholder="请输入学号" id="number" name="number">
                   </div>
               </div>
               <div class="form-group" id="submit">
                   <div class="col-sm-offset-2 col-sm-10">
                       <button type="submit" class="btn btn-primary btn-default">登陆</button>
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
 <script>
  $(function () {
     $('#login-form').submit(function () {
         var name = $('#name').val();
             number = $('#number').val();
         $('.alert').alert('close');
         if (name == '' || name.length <= 0) {
            $('#login-form').append('<div class="alert alert-warning" role="alert">姓名不能为空</div>');
             return false;
         }
         if (number == '' || number.length <= 0) {
            $('#login-form').append('<div class="alert alert-warning" role="alert">学号不能为空</div>');
             return false;
         }
         return true;
     })
  })
 </script>
 </html>
