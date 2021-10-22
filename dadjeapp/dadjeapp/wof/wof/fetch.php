<?php

//fetch.php
require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

if($_POST["query1"] != '')
{
	$search_array1 = explode(",", $_POST["query1"]);
	$search_text1 = "'" . implode("', '", $search_array1) . "'";
	$query1 = "
	SELECT * FROM wof_repository
	WHERE wr_zone IN (".$search_text1.") AND wr_site='sts'
	ORDER BY zone_id DESC
	";
}
else
{
	$msg = '';
	$msg .= '
	<tr>
		<td colspan="5" align="center">Please Select again</td>
	</tr>
	';
	echo $msg;
}

$statement1 = $cdb->prepare($query1);

$statement1->execute();

$result1 = $statement1->get_result();

$output1 = '';


if($result1 != '')
{
foreach ($result1  as $row1) {
?>
        <tr>
		    <td><?php echo $row1["wr_site"] ?></td>
			<td><?php echo $row1["wr_zone"]?></td>
			<td><input type="checkbox" name="" class=""> <?php echo $row1["wr_tools"]?></td>
			<td><input type="checkbox" name="" class=""> <?php echo $row1["wr_materials"]?></td>
			<td><input type="checkbox" name="" class=""> <?php echo $row1["wr_products"]?></td>
		</tr>
<?php
 }
}
else
{
	$output1 .= '
	<tr>
		<td colspan="5" align="center">No Requirements for this sts zone needed</td>
	</tr>
	';
}
echo $output1;
?>
<!--
<tr>
		<td><?php //echo $row1["wr_site"] ?></td>
			<td><?php //echo $row1["wr_zone"]?></td>
			<td><?php //echo $row1["wr_tools"]?></td>
			<td><?php //echo $row1["wr_materials"]?></td>
			<td><?php //echo $row1["wr_products"]?></td>
		</tr>
	-->




<!--

if($result1 != '')
{
	foreach($result1 as $row1)
	{
		$output1 .= '
		<tr>
		<td>'.$row1["wr_site"].'</td>
			<td>'.$row1["wr_zone"].'</td>
			<td>'.$row1["wr_tools"].'</td>
			<td>'.$row1["wr_materials"].'</td>
			<td>'.$row1["wr_products"].'</td>
		</tr>
		';
	}
}

-->