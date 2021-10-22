<?php
require('../controls/zdze8efzedzdeezd/de5.php');
$quedis=$cdb->prepare('SELECT * FROM work_materials');
$quedis->execute();
if ($quedis===false) {
	echo "Export data error";
}else{
	$resdis=$quedis->get_result();
	
while($rowdis=$resdis->fetch_row())
{
	?>
<tr>
	<td><?php echo $rowdis[1];?></td>
	<td><?php echo $rowdis[2];?></td>
	<td><?php echo $rowdis[3];?></td>
	<td><?php echo $rowdis[4];?></td>
</tr>
<?php
}
}
?>