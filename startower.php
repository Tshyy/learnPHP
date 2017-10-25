<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <meta name="author" content=" 天上有云 " />
  <title>星星塔</title>
</head>
<body>
  <form action="#" method='post'><!--表单数据提交给本页面-->
    <input type="text" name="linenum" size="20" placeholder="请输入要打印的行数" />
    <br />
    <input type="submit" name="shape1"  value="金字塔"/>
    <input type="submit" name="shape2"  value="空心菱形"/>
    <br />
  </form>
  <?php
  error_reporting(E_ALL&~E_NOTICE);
  // 接收表单行数和形状数据
  $LineNum=$_POST['linenum'];
  $Pyramid=$_POST['shape1'];
  $Diamond=$_POST['shape2'];

  // 判断用户点击了哪个按钮，根据不同形状输出星星塔
  //金字塔
  if($Pyramid){
    $SpaceAhead=$LineNum-1;
    for($i=1;$i<=$LineNum;$i++){
      $StarNum=2*$i-1;
      for($j=1;$j<=$SpaceAhead;$j++){
        echo '&nbsp&nbsp';
      }
      for($k=1;$k<=$StarNum;$k++){
        echo '*';
      }
      echo '<br />';
      $SpaceAhead--;
    }
  }
  //空心菱形塔
  if($Diamond){
    //上半区：
    $SpaceAhead=$LineNum-1;
    for($i=1;$i<=$LineNum;$i++){
      for($j=1;$j<=$SpaceAhead;$j++){
        echo '&nbsp&nbsp';
      }
      $SpaceMid=2*$i-3;
      if($SpaceMid>0){
        echo '*';
        for($j=1;$j<=$SpaceMid;$j++){
          echo '&nbsp&nbsp';
        }
      }
      echo '*'.'<br />';
      $SpaceAhead--;
    }
    //下半区：
    $SpaceAhead=1;
    for($k=$LineNum-1;$k>=1;$k--){
      $SpaceMid=2*$k-3;
      for($j=1;$j<=$SpaceAhead;$j++){
        echo '&nbsp&nbsp';
      }
      if($SpaceMid>0){
        echo '*';
      }
      for($j=1;$j<=$SpaceMid;$j++){
        echo '&nbsp&nbsp';
      }
      $SpaceAhead++;
      echo '*'.'<br />';
    }
  }?>
</body>
</html>
