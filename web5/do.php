
<?php
$flag ="flag{#6B_AGTE$*t0mW_3B%s9EZkMBS8hZ7Zc}";
$ip = $_SERVER['REMOTE_ADDR'];

if($ip =="127.0.0.1"){
    echo $flag;
}else{
    echo "您的IP地址为：".$ip."<br>服务器flag仅返给源地址为127.0.0.1的访问者，请换地址尝试！！！";
}

?>