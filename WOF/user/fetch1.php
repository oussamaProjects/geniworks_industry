<?php

//fetch.php

require('../controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

if($_POST["query2"] != '')
{
	$search_array2 = explode(",", $_POST["query2"]);
	$search_text2 = "'" . implode("', '", $search_array2) . "'";
	$query2 = "
	SELECT * FROM wof_repository
	WHERE wr_zone IN (".$search_text2.") AND wr_site='rtg'
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

$statement2 = $cdb->prepare($query2);
$statement2->execute();

$result2 = $statement2->get_result();

$output2 = '';

if($result2 != '')
{
	foreach($result2 as $row2)
	{
		$output2 .= '
		<tr>
		<td>'.$row2["wr_site"].'</td>
			<td>'.$row2["wr_zone"].'</td>
			<td>'.$row2["wr_tools"].'</td>
			<td>'.$row2["wr_materials"].'</td>
			<td>'.$row2["wr_products"].'</td>
		</tr>
		';
	}
}
else
{
	$output2 .= '
	<tr>
		<td colspan="5" align="center">No Requirements for this rtg zone needed</td>
	</tr>
	';
}

echo $output2;


?>