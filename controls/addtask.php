<?php
require('zdze8efzedzdeezd/45azd72dz9de5.php');

$priority=$_POST['priority'];
$ttitle=$_POST['ttitle'];
$decription=$_POST['decription'];
$priority=$_POST['priority'];
$spendtime=$_POST['spendtime'];
$deadline=$_POST['deadline'];
$starttime=$_POST['starttime'];

$reqins=$cdb->prepare("INSERT INTO tasks VALUES ('', '$ttitle', '$priority', '$decription', '$starttime', '$spendtime', '', '$deadline')");
$reqins->execute();

if ($reqins===false) {

	echo "insert failed".mysql_error();
}
else
{
	$resins=$reqins->get_result();
	echo "task inserted";
	echo "<meta http-equiv='refresh' content='0;url=../add-task.php'>";
}
?>