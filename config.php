<?php
define('HOST_NAME','localhost');
define('USER_NAME','root');
define('PASSWORD','');
@mysql_connect(HOST_NAME,USER_NAME,PASSWORD)or die(mysql_error());
mysql_select_db('test_db');
//$link=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD);
//mysqli_select_db($link,'test_db');
