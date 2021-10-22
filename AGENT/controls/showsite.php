
<?php
require('zdze8efzedzdeezd/de5.php');


	

$agentlevel=$_POST['agentlevel'];
$agentsite=$_POST['agentsite'];
$agenttype=$_POST['agenttype'];
$agentname=$_POST['agentname'];
$agentphone=$_POST['agentphone'];
$agenttitle=$_POST['agenttitle'];
$agentadress1=$_POST['agentadress1'];

$agentadress2=isset($_POST['$agentadress2']);
$agentage=$_POST['agentage'];
$eqpic = $_FILES['agpic']['name'];

$agentcin=$_POST['agentcin'];
$agentcnss=$_POST['agentcnss'];
$agentsalary=$_POST['agentsalary'];

$agentdl=$_POST['agentdl'];
$agentdlcat=$_POST['agentdlcat'];
$agentweight=$_POST['agentweight'];
$agentsize=$_POST['agentsize'];
$agentshoesize=$_POST['agentshoesize'];
$agentms=$_POST['agentms'];
$agentmsk=$_POST['agentmsk'];
$agentmskn=$_POST['agentmskn'];
$agentrwl=$_POST['agentrwl'];
$agenthiringd=$_POST['agenthiringd'];


$agentemergncyp=$_POST['agentemergncyp'];
$agentemergncyn=$_POST['agentemergncyn'];
 if($eqpic!='')
 {
 	$upload_directory = "img/agents/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['agpic']['tmp_name'], $upload_directory.$pic)){    


  $addData = "INSERT INTO agents VALUES ('', '$agentname', '$agentphone', '$agentage', '$agentadress1', '$agentadress2', '$agenttitle', '$pic', '$agentcin', '$agentcnss', '$agentsalary', '$agentdl', '$agentdlcat', '$agentweight', '$agentsize', '$agentshoesize', '$agentms', '$agentmsk', '$agentmskn', '$agentrwl', '$agentsite', '$agenttype', '$agentlevel', '$agenthiringd', 'agentemergncyn', 'agentemergncyp', 'team', 'active', 'never', NOW(), '')";
 
$result = mysqli_query($cdb,$addData);
?>
<meta http-equiv="refresh" content="0;" />
<?php
}}




?>

