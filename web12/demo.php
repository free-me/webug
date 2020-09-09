<?php
ini_set('display_errors','0');
$servername = "10.204.100.243";
$username = "root";
$password = "root";
$con = mysqli_connect($servername, $username, $password,"demodb");
$con = mysqli_connect($servername, $username, $password,"demodb");
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$user=$_POST['name'];
$passwd=md5($_POST['passwd']);
session_start();
$_SESSION['s_email']=$user;
$sql ="SELECT * FROM user
WHERE user='".$user."' and passwd='".$passwd."'";

if(!empty($user) or !empty($passwd)){
    try{
    $result = mysqli_query($con,$sql);
    if(mysqli_fetch_array($result)){
        echo '恭喜您登录成功！！！';
        setcookie("user", $user, time()+3600);
        header("Location: admin.html");  ;
    }else{
        echo '登录失败！！！';
        echo '但是开发者很粗心的把测试代码直接输出给了你,你请求的内容为：'.$sql."<br>";
        echo md5('admin');

    }}catch ( Exception $e){
        echo '查询查询异常！！！';
    }
}else{
    echo "用户名密码不能为空！！！";

}

?>


