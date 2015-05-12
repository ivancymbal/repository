<?php
include('config.php');

/*
if(isset($_POST['test']))
{
    if(preg_match('/^mor[eay]+$/',$_POST['test']))
    {
        echo($_POST['test'].'<br/>');
    }
    else
        echo('no matches'.'<br/>');

    echo (date('d-m-Y').'<br/>');
    echo (date('H:i:s').'<br/>');
    echo (date('O').'<br/>');

    echo(getdate());
}
*/


//if (isset($_POST['table_name']))

$query="select * from `datetime`";
$result=mysql_query($query) or die (mysql_error());
while($date_time=mysql_fetch_array($result))
{
    $date=explode(' ',$date_time['my_date']);
    $day=explode('-',$date[0]);
    if($day[2]%2!=0)
    echo($date_time['my_date'].'<br/>');
}

echo('some');

?>
<html>
 <head>
     <meta charset="utf-8">
 </head>
<body>
<form method="post" action="index.php">
    <input type="text" name="table_name">
    <input type="submit" value="Test">
</form>
</body>
</html>


