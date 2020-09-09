<?php
$locale='en_US.UTF-8';
setlocale(LC_ALL,$locale);
putenv('LC_ALL='.$locale);
//$ip = $_POST['ip'];
if(!empty($_GET['ip'])){
    $cmd ='ping '.$_GET['ip'];
    echo $cmd."<br>";
    echo '<meta charset="UTF-8">';
    echo system($cmd);
}else{
echo "ip不能为空！！！";
}
?>