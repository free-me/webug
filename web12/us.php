<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true');
header("Content-Type: application/json;charset=utf-8");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    getMethod();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
    postMethod();
}
function getMethod(){
    $filename = 'search_save.txt';//假设文件内容为dog，cat，pig,人
    if (file_exists($filename)) {
//        $content = file_get_contents($filename);
//        $pattern = '/[\x{4e00}-\x{9fa5}_a-zA-Z0-9]+/u';
        //[\x{4e00}-\x{9fa5}_a-zA-Z0-9]匹配中文、下划线、字母、数字
//        preg_match_all($pattern, $content, $matches);
        $searchRead = $matches[0];//通过正则表达式提取存储列表到$searchRead数组['dog','cat','pig','人']
//        $defaultSearch = $searchRead[0];
        $result = '{"success":false,"defaultSearch":""}';
        if($_GET["data"]){
            $result = '{"success":true,"defaultSearch":"'.$filename.'"}';
        }
    }
    echo $result;//echo返回json格式化数据对{"success":true,"defaultSearch":"'.$defaultSearch.'"}
}
