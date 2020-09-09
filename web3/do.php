
<?php
$flag ="flag{&TMD6s_k%jPn*GpGTDhri7ZMh8x0KkWZ}";
$username ="admin"; #$md52等于输入的a经过md5加密后的数
$password = "123321";
if (empty($_GET['flagid'])){
    echo "flagid 不能为空！！！";
    }elseif ($_GET['flagid']==88){
    setcookie("flag", base64_encode($flag), time()+3600);
//    echo base64_decode("ZmxhZ3smVE1ENnNfayVqUG4qR3BHVERocmk3Wk1oOHgwS2tXWn0%3D");

}else{
    echo "请继续尝试！！！";
}

?>