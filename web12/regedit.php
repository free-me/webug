<?php
ini_set('display_errors','0');
$servername = "10.204.100.243";
$username = "root";
$password = "root";
$con = mysqli_connect($servername, $username, $password,"demodb");
//$con = mysqli_connect($servername, $username, $password,"demodb");
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}
//INSERT INTO `demodb`.`user`(`user`, `passwd`, `email`) VALUES ('abc', '1234', 'qqq')
$user=$_POST['user'];
$passwd=$_POST['passwd'];
$email = $_POST['email'];
$sql = "INSERT INTO user (user, passwd, email) VALUES ('".$user."', '".md5($passwd)."', '".$email."')";

if ($con->query($sql) === TRUE) {
    echo "<script>alert(/用户注册成功！！！/)</script>";
    header("Location: index.html");
} else {
    echo "<script>alert(/注册失败请重新尝试/)</script>";
}