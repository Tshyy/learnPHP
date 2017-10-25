<?php
/**
 * 公共函数
 */


/**
 * 图像上传
 * @param $file
 * @return string
 */
function imgUpload($file,$number)
{
  $error = $file['error'];

 if($error) { //非零
   switch ($error) {
     case UPLOAD_ERR_INI_SIZE:
     case UPLOAD_ERR_FORM_SIZE:
        echo '<script>alert('.'图像大小超限'.')</script>';
        break;
     case UPLOAD_ERR_PARTIAL:
        echo '<script>alert('.'图像上传不完整'.')</script>';
        break;
     case UPLOAD_ERR_NO_FILE:
        echo '<script>alert('.'图像上传文件为空'.')</script>';
        break;
}
} else {
$result = move_uploaded_file($file['tmp_name'], './upload2017/'.$number.$file['name']);
$result = $result ? '' : '上传失败';
if($result==='上传失败')
  echo '<script>alert('.'图像上传失败'.')</script>';
}


}

/**
 * 检查用户是否登录
 *
 */
function checkLogin()
{
    //开启session
    session_start();
    //用户未登录
    if(!isset($_SESSION['user']) || empty($_SESSION['user']))
    {
        return false;
    }
    return true;

}

/**
 * [login description]
 * @param  [string] $name   姓名
 * @param  [int] $number    学号
 * @return [boolean]
 */
function login($name,$number){
      //数据库连接

      $mysqli=new mysqli('localhost',"root","",'stuadmin');
      $mysqli->query('set names utf8');

      //根据用户名查询用户
      $sql = "SELECT * FROM `students` WHERE `name` = '{$name}' LIMIT 1";

      $result=$mysqli->query($sql);
      $data = $result->fetch_all(MYSQLI_ASSOC);

      if(is_array($data) && !empty($data))
      {
          if($number == $data[0]['number'])
          {
              $_SESSION['user'] = $data[0];
              return true;
          }
          else
          {
            echo "<script>";
            echo "alert('学号不正确')";
            echo "</script>";
            return false;
          }
      }
      else
      {
        echo "<script>";
        echo "alert('学生不存在，请注册')";
        echo "</script>";
        return false;
      }
}


 ?>
