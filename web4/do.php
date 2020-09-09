
<?php
$flag ="flag{#6B_AGTE$*t0mW_3B%s9EZkMBS8hZ7Zc}";
$num = $_GET['id'];
if($num >1) {
    $Contents = file_get_contents('flag.html');
//    file_put_contents('index.tpl.php', $Html);
    echo $Contents;
}
?>