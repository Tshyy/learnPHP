<?php
include_once './lib/fun.php';
if($login = checkLogin())
{
    $user = $_SESSION['user'];
}

//检查page参数
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
//把page与1对比 取中间最大值
$page = max($page, 1);
//每页显示条数
$pageSize = 3;
$offset = ($page - 1) * $pageSize;



$con = mysqlInit('localhost', 'root', 'WenZE7487./', 'imooc_mall');
$sql="SELECT `id`,`username`,`create_time` FROM `im_user` ORDER BY `id` asc,`create_time` desc LIMIT {$offset},{$pageSize} ";
$obj= mysql_query($sql);
while($result = mysql_fetch_assoc($obj))
{
    $users[] = $result;
}

$sql1 = "SELECT COUNT(`id`) as total_users from `im_user`";
$obj1 = mysql_query($sql1);
$result1 = mysql_fetch_assoc($obj1);
$total_users = isset($result1['total_users'])?$result1['total_users']:0;

$pages = UsersPages($total_users,$page,$pageSize,3);

date_default_timezone_set('PRC');


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>用户列表</title>
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
</head>

<body data-type="generalComponents">

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
                用户列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="admin_index.php" class="am-icon-home">首页</a></li>

                <li class="am-active">用户列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 用户列表
                    </div>

                </div>
                <div class="tpl-block">

                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main am-table-centered">
                                    <thead>
                                        <tr>
                                            <th class="table-type">ID</th>
                                            <th class="table-type">名称</th>
                                            <th class="table-type">创建时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($users as $r):?>
                                        <tr>
                                            <td><?php echo $r['id'] ?></td>
                                            <td><?php echo $r['username'] ?></td>
                                            <td><?php echo date("Y-m-d H:i:s", intval($r['create_time']))?></td>
                                        </tr>
                                      <?php endforeach;?>

                                    </tbody>
                                </table>
                                <div class="am-cf">
                                    <?php echo $pages?>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>

        </div>

    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
