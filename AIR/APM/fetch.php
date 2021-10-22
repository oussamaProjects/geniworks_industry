<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=dadjeapp", "root", "");

if($_POST["query"] != '')
{
	$search_array = explode(",", $_POST["query"]);
	$search_text = "'" . implode("', '", $search_array) . "'";
	$query = "
	SELECT * FROM asset_clean_inspection 
	WHERE acij_sub_asset IN (".$search_text.") 
	ORDER BY acij_id DESC
	";
}
else
{
	$query = "SELECT * FROM asset_clean_inspection ORDER BY acij_id DESC";
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
			<td>'.$row["acij_id"].'</td>
			<td>'.$row["acij_asset"].'</td>
			<td>'.$row["acij_subasset_id"].'</td>
			<td>'.$row["acij_date"].'</td>
			<td>'.$row["acij_sub_asset"].'</td>
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