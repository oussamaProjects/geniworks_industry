
<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "dadjeapp");
 $output1 = '';
 if($_POST["action"] == "acij_asset")
 {
  $query1 = "SELECT acij_subasset_id FROM asset_clean_inspection WHERE acij_asset = '".$_POST["query1"]."' GROUP BY acij_subasset_id";
  $result1 = mysqli_query($connect, $query1);
  $output1 .= '<option value="">Select acij_subasset_id</option>';
  while($row1 = mysqli_fetch_array($result1))
  {
   $output1 .= '<option value="'.$row1["acij_subasset_id"].'">'.$row1["acij_subasset_id"].'</option>';
  }
 }
 if($_POST["action"] == "acij_subasset_id")
 {
  $query1 = "SELECT acij_sub_asset FROM asset_clean_inspection WHERE acij_subasset_id = '".$_POST["query1"]."'";
  $result1 = mysqli_query($connect, $query1);
  $output1 .= '<option value="">Select City</option>';
  while($row1 = mysqli_fetch_array($result1))
  {
   $output1 .= '<option value="'.$row1["acij_sub_asset"].'">'.$row1["acij_sub_asset"].'</option>';
  }
 }
 echo $output1;
}
?>
