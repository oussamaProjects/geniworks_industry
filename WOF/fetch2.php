<?php

//fetch.php

require('controls/a465g6zasaqs5rdfv-dfz5/45azd72dz9de5.php');

if($_POST["query3"] != '')
{
	$search_array = explode(",", $_POST["query3"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query3 = "
	SELECT * FROM wof_repository 
	WHERE wr_zone IN (".$search_text.") AND wr_site='boom crane' ORDER BY zone_id DESC
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

$statement = $cdb->prepare($query3);

$statement->execute();

$result = $statement->get_result();


$output = '';

if($result != '')
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
		<td>'.$row["wr_site"].'</td>
			<td>'.$row["wr_zone"].'</td>
			<td>'.$row["wr_tools"].'</td>
			<td>'.$row["wr_materials"].'</td>
			<td>'.$row["wr_products"].'</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="5" align="center">No Requirements for this Boom Crane zone needed</td>
	</tr>
	';
}

echo $output;


?>