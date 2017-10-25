<?php
include_once"./lib/fun.php";
if($login = checkLogin())
{
    $user = $_SESSION['user'];
}

$con = mysqlInit('localhost', 'root', 'WenZE7487./', 'imooc_mall');

$sql1 = "SELECT COUNT(`id`) as total_users from `im_user`";
$sql2 = "SELECT COUNT(`id`) as total_goods from `im_goods`";

$obj1 = mysql_query($sql1);
$obj2 = mysql_query($sql2);

$result1 = mysql_fetch_assoc($obj1);
$result2 = mysql_fetch_assoc($obj2);

$total_users = isset($result1['total_users'])?$result1['total_users']:0;
$total_goods = isset($result2['total_goods'])?$result2['total_goods']:0;
 ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="assets/js/echarts.min.js"></script>
</head>

<body data-type="index">

    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <span>后台管理系统</span>



            <!--  <a href="javascript:;" class="tpl-logo">
                <img src="assets/img/logo.png" alt="">
            </a> -->
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick"><?php $user ?></span><span class="tpl-header-list-user-ico"> </span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href=""><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <?php if($login): ?>
                    <li><span>管理员：<?php echo $user['username'] ?></span></li>
                <?php endif?>
                <li><a class="tpl-header-list-link" href="index.php"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>

    <div class="tpl-page-container tpl-page-header-fixed">

        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                后台管理系统列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="admin_index.php" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="admin_user_list.php" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>用户列表</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tpl-content-wrapper">

            <div class="tpl-content-page-title">
                后台首页
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li class="am-active">介绍</li>
            </ol>
            <div class="tpl-content-scope">
                <div class="note note-info">
                    <h3>系统介绍
                        <span class="close" data-close="note"></span>
                    </h3>
                    <p> 后台系统中包括首页、用户列表和商品列表。 </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;1)首页中统计了用户的总数以及商品的总数</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;2)用户列表中列出了数据库中的所有用户。</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;3)商品列表中列出了所有商品，并且可以修改商品的相关信息，以及可以删除商品。</p>
                </div>
            </div>

            <div class="row">
                <div class="am-u-sm-6">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="am-icon-comments-o"></i>
                        </div>
                        <div class="details">
                            <div class="desc"> 用户统计 </div>
                            <div class="number"> <?php echo $total_users?> </div>
                        </div>
                        <a class="more" href="user-list.html"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class=" am-u-sm-6">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="desc"> 商品统计 </div>
                            <div class="number"> <?php echo $total_goods?> </div>

                        </div>
                        <a class="more" href="table-font-list.html"> 查看更多
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/iscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
