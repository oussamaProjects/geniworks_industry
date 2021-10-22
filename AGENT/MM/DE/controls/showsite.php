
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

 if($eqpic!='')
 {
 	$upload_directory = "img/agents/"; 
 	$pic=time().$eqpic;
 	if(move_uploaded_file($_FILES['agpic']['tmp_name'], $upload_directory.$pic)){    


  $addData = "INSERT INTO agents VALUES ('', '$agentname', '$agentphone', '$agentage', '$agentadress1', '$agentadress2', '$agenttitle', '$pic', 'Not declared', '0',  '$agentsite', '$agenttype', '$agentlevel', '', '', '', NOW())";
 
$result = mysqli_query($cdb,$addData);


}}




?>

