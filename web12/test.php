<?php
$id=111;
$name="test";
$msg="11111";
for($i=1;$i<100;$i++){
    $tr=$tr."<tr>
        <td>".$i."</td>
        <td>$name</td>
        <td>$msg</td>
    </tr>";
    }
$tab =<<<EOF
<table>
    <tr>
        <td>编号</td>
        <td>用户名</td>
        <td>描述</td>
    </tr>
    
    $tr

</table>
EOF;

echo $tab;
