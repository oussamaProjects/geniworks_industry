<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=1115411geni5545work5sdb1115415", "root", "");

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT * FROM wof_repository 
	WHERE wr_zone IN (".$search_text.") 
	ORDER BY zone_id DESC
	";
}
else
{
	$query = "SELECT * FROM wof_repository ORDER BY wr_site ASC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
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
		<td colspan="5" align="center">No Data Found</td>
	</tr>
	';
}

echo $output;


?>