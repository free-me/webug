<?php
echo "Bob received a mission to write a login system on someone else's serve
r, and he he only finished half of the work<br />";
echo "flag is <br></br>flag{f7rkoYITKETc&z54q4#iwYep*q5X2Vs4}<br /><br />";
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
try {
    $conn = new PDO("sqlsrv:Server=*****;Database=not_here", "oob", "");
} catch (PDOException $e) {
    die("Error connecting to SQL Server" . $e->getMessage());
}
#echo "Connected to MySQL<br />";
echo "Connected to SQL Server<br />";
$id = $_GET['id'];
if (preg_match('/EXEC|xp_cmdshell|sp_configure|xp_reg(.*)|CREATE|DROP|declare
|if|insert|into|outfile|dumpfile|sleep|wait|benchmark/i', $id)) {
    die('NoNoNo');
}
$query = "select message from not_here_too where id = $id"; //link server: On linkname:mysql
$stmt = $conn->query($query);
if (@$row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//TO DO: ...
//It's time to sleep...
}

