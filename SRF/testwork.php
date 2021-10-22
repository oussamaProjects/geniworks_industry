<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
$("#mySelect").change(function(){
  $("#myDiv").load( $(this).val() );
}).change();
</script>

<select onChange="" id="mySelect">
  <option value="getresult.php">getresult.php</option>
  <option value="index.php">index.php</option>
</select>

<div id="myDiv"></div>
</body>
</html>