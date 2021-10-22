<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];

$targetPath = "".$_FILES['userImage']['name'];

$sourcePath1 = $_FILES['userImage1']['tmp_name'];
$targetPath1 = "".$_FILES['userImage1']['name'];

$sourcePath2 = $_FILES['userImage2']['tmp_name'];
$targetPath2 = "".$_FILES['userImage2']['name'];

$sourcePath3 = $_FILES['userImage3']['tmp_name'];
$targetPath3 = "".$_FILES['userImage3']['name'];

if(move_uploaded_file($sourcePath,$targetPath)) {




	require('zdze8efzedzdeezd/de5.php');

$asset=$_POST['asset'];
$subasset=$_POST['subasset'];
$assetid=$_POST['assetid'];
$marka=$_POST['marka'];
$material=$_POST['material'];

$marka=$_POST['mark1'];
$verdicta=$_POST['verdict1'];

$markb=$_POST['mark2'];
$verdictb=$_POST['verdict2'];

$markc=$_POST['mark3'];
$verdictc=$_POST['verdict3'];

$markd=$_POST['mark4'];
$verdictc=$_POST['verdict4'];

$marke=$_POST['mark5'];
$verdicte=$_POST['verdict5'];

$markf=$_POST['mark6'];
$verdictf=$_POST['verdict6'];

$markg=$_POST['mark7'];
$verdictg=$_POST['verdict7'];

$markh=$_POST['mark8'];
$verdicth=$_POST['verdict8'];

$marki=$_POST['mark9'];
$verdicti=$_POST['verdict9'];

$markj=$_POST['mark10'];
$verdictj=$_POST['verdict10'];

$markk=$_POST['mark11'];
$verdictk=$_POST['verdict11'];


// $marka=$_POST['marka'];
// $verdicta=$_POST['verdicta'];

// $markb=$_POST['markb'];
// $verdictb=$_POST['verdictb'];

// $markc=$_POST['markc'];
// $verdictc=$_POST['verdictc'];

// $markd=$_POST['markd'];
// $verdictc=$_POST['verdictd'];

// $marke=$_POST['marke'];
// $verdicte=$_POST['verdicte'];

// $markf=$_POST['markf'];
// $verdictf=$_POST['verdictf'];

// $markg=$_POST['markg'];
// $verdictg=$_POST['verdictg'];

// $markh=$_POST['markh'];
// $verdicth=$_POST['verdicth'];

// $marki=$_POST['marki'];
// $verdicti=$_POST['verdicti'];

// $markj=$_POST['markj'];
// $verdictj=$_POST['verdictj'];

// $markk=$_POST['markk'];
// $verdictk=$_POST['verdictk'];


$obsa=$_POST['obs1'];
$obsb=$_POST['obs2'];
$obsc=$_POST['obs3'];
$obsd=$_POST['obs4'];
$obse=$_POST['obs5'];
$obsf=$_POST['obs6'];
$obsg=$_POST['obs7'];
$obsh=$_POST['obs8'];
$obsi=$_POST['obs9'];
$obsj=$_POST['obs10'];
$obsk=$_POST['obs11'];

/*

$obsa=$_POST['obsa'];
$obsb=$_POST['obsb'];
$obsc=$_POST['obsc'];
$obsd=$_POST['obsd'];
$obse=$_POST['obse'];
$obsf=$_POST['obsf'];
$obsg=$_POST['obsg'];
$obsh=$_POST['obsh'];
$obsi=$_POST['obsi'];
$obsj=$_POST['obsj'];
$obsk=$_POST['obsk'];*/


$equip=$_POST['equip'];
$uv=$_POST['uv'];
$currenttype=$_POST['currenttype'];
$currentt=$_POST['currentt'];
$witnss=$_POST['witnss'];
$mfv=$_POST['mfv'];
$prdspace=$_POST['prdspace'];
$demagnet=$_POST['demagnet'];
$magnitdelay=$_POST['magnitdelay'];
$revealer=$_POST['revealer'];
$lightu=$_POST['lightu'];
$lightt=$_POST['lightt'];
$brightt=$_POST['brightt'];

$pcondition=$_POST['pcondition'];
$temper=$_POST['temper'];

$comment1=$_POST['comment1'];
$comment2=$_POST['comment2'];
$comment3=$_POST['comment3'];
$comment4=$_POST['comment4'];

$controltype=$_POST['controltype'];

  $addrev = $cdb->prepare("INSERT INTO report VALUES ('', '$controltype', '$asset', '$assetid', '$subasset', '$marka', '$verdicta', '$markb', '$verdictb', '$markc', '$verdictc', '$markd', '$verdictd', '$marke', '$verdicte', '$markf', '$verdictf', '$markg', '$verdictg', '$markh', '$verdicth', '$marki', '$verdicti', '$markj', '$verdictj', '$markk', '$verdictk', '$equip', '$material', '$uv', '$currenttype', '$currentt', '$witnss', '$mfv', '$prdspace', '$demagnet', '$magnitdelay', '$revealer', '$lightu', '$lightt', '$brightt', '$pcondition', '$temper', NOW(), '', '', '', '', '$targetPath', '', '', '$handmark', '$targetPath1', '$targetPath2', '$targetPath3', '$comment1', '$comment2', '$comment3', '$comment4', '$obsa', '$obsb', '$obsc', '$obsd', '$obse', '$obsf', '$obsg', '$obsh', '$obsi', '$obsj', '$obsk')");
  $addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
   ?>

<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          
      </div>
      <div class="modal-body">
          <p>Your Report Successfully Saved! </p>
          <?php
require('controls/zdze8efzedzdeezd/de5.php');
$selr=$cdb->prepare("SELECT * FROM report LIMIT 1");
$selr->execute();
if ($selr===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resr=$selr->get_result();
?>
<?php while ($showr=$resr->fetch_row()) { ?>
  <span><?php echo $showr[0]; ?> </span>
<?php }}?>
            <span>Go To </span> <a href="http://mydadje.com/Reporting/EUROGATE/" class="btn btn-brand">Dashboard</a>
                  
      </div>    
    </div>
  </div>
</div>



   <?php
   } 
?>

          <img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />                     
      
<?php
}
}
}
?>