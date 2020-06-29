<?php


session_start();


include('config.inc');


$login = mysql_query("SELECT * FROM user WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");


if (mysql_num_rows($login) == 1) {

$_SESSION['username'] = $_POST['username'];

header('Location: securedpage.php');
}
else {

header('Location: index.php');
}

?>