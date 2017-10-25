<?php
$fromTrans=intval($_POST['fromTrans']);
$toTrans=intval($_POST['toTrans']);
$money=floatval($_POST['money']);

header('content-type:text/html;charset=utf-8');


$code=4;

$dsn = "mysql:host=localhost;dbname=stuadmin";
$pdo = new PDO($dsn,'root','');
$pdo->exec('set names utf8');
$sql = "SELECT `money` FROM `students` WHERE `number`='{$fromTrans}' LIMIT 1";
$stmt= $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

if((floatval($data[0]['money'])-$money)<0){
  $code=3;
}
else{
  $pdo->beginTransaction(); //开启事务
  $sql1 = "UPDATE `students` SET `money`=`money`-'{$money}' WHERE `number`='{$fromTrans}'";
  $r1 = $pdo->exec($sql1);

  $sql2 = "UPDATE `students` SET `money`=`money`+'{$money}' WHERE `number`='{$toTrans}'";
  $r2 = $pdo->exec($sql2);

  if($r1>0 && $r2>0){
      $pdo->commit(); //事务提交
      $code=1;
  }else{
      $pdo->rollBack(); //事务回滚
      $code=2;
  }
}


$msg='';
switch ($code){
  case 1:
    $msg='转账成功';
    break;
  case 2:
    $msg='数据库错误转账失败';
    break;
  case 3:
    $msg='余额不足';
    break;
  case 4:
  default:
    $msg='数据库连接失败';
}

echo json_encode(array('msg'=>$msg));
?>
