<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=1115411geni5545work5sdb1115415", "root", "");

$query = "SELECT DISTINCT wr_zone FROM wof_repository ORDER BY wr_zone ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Filter select</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		
		<link href="css/bootstrap-select.min.css" rel="stylesheet" />
		<script src="js/bootstrap-select.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<h2 align="center">Requirments</h2><br />
			
			<select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
			<?php
			foreach($result as $row)
			{
				echo '<option value="'.$row["wr_zone"].'">'.$row["wr_zone"].'</option>';	
			}
			?>
			</select>
			<input type="hidden" name="hidden_country" id="hidden_country" />
			<div style="clear:both"></div>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Site</th>
							<th>Zone</th>
							<th>materials requirments</th>
							<th>tools requirments</th>
							<th>products requirments</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
			<br />
			<br />
			<br />
		</div>
	</body>
</html>


<script>
$(document).ready(function(){

	load_data();
	
	function load_data(query='')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('tbody').html(data);
			}
		})
	}

	$('#multi_search_filter').change(function(){
		$('#hidden_country').val($('#multi_search_filter').val());
		var query = $('#hidden_country').val();
		load_data(query);
	});
	
});
</script>




