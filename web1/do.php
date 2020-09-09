
<?php
$md51 = md5('QNKCDZO');
$a = @$_GET['msg'];
$md52 = md5($a); #$md52等于输入的a经过md5加密后的数
//https://www.bbsmax.com/A/kmzLxxDYzG/
if (isset($a)) {
    if ($a != 'QNKCDZO' && $md51 == $md52#a不等于QNKCDZO，但是等于QNKCDZO加密后的数
    ) {
        echo "flag{*fbTA87mQk2PF8emwjHNps9d*&d_m*M*}";
    } else {
        echo "继续努力！！！";
    }
} else {
    echo "需要输入验证码！";
}
?>