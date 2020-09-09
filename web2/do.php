
<?php
$flag ="flag{cAdGNwMe6CQ4@jJ#7H6mw&jb4tt6m*e2}";
$username ="admin"; #$md52等于输入的a经过md5加密后的数
$password = "123321";
if (!isset($_POST['username']) or !isset($_POST['password'])) {
    echo "用户名\密码不能为空！！！";
    }elseif ($_POST['username']==$username and $_POST['password']==$password){
    echo "你需要的flag如下：".base64_encode($flag);
}else{
    echo "用户名或密码错误！！！";
}

?>