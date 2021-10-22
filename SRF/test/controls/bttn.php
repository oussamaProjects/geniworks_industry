<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script>
$( document ).ready(function() {
    
    $('select').on('change', function() {
       if(this.value == 1)
           $('#btn').attr("disabled", true);
        else
           $('#btn').attr("disabled", false);
    });

    
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1s.9.1/jquery.min.js"></script>
<form class='update-status'>
<select id='status_id'>
<option value='1' selected='selected'>Order received</option>
<option value='2'>Processing</option>
</select>
<button type='submit' id='btn' title='Click to update the status of this order' disabled>Update order status</button>
</form>

</body>
</html>