<?php
$flag ="flag{oixx0sNeEpVPTXAE}";

if (isset($_GET['name']) and isset($_GET['passwd'])) {
    if ($_GET['name'] == $_GET['passwd'])
        echo '<p>用户名密码不能相同</p>';
    else if (sha1($_GET['name']) === sha1($_GET['passwd']))
        die('Flag: ' . $flag);
    else
        echo '<p>用户名密码与密码不一致.</p>';
} else {
    echo '<p>Login first!</p>';
}
?>