<?php
require('zdze8efzedzdeezd/de5.php');
$name=$_POST["name"];
$ctgr=$_POST["ctgr"];
$id_upd=$_POST["id_upd"];
$sql="UPDATE payrolls_settings set wks_employee='$name', wks_salary_hour='$ctgr' where wks_id='$id_upd'";
if($cdb->query($sql)===TRUE){
    echo "DATA updated";
}
?>