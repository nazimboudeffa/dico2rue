<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<?php include 'includes/tete.php' ?>
</head>
<body>
	<?php include 'includes/revive.php' ?>
<div id="wrapper">
	<?php include 'includes/entete.php' ?>
<div class="clear"></div>


<div id="content">



<div class="left_column">


<style>
.profiletitle{ font-size:54px; }
.profiletitle span{ color:black; font-size:24px;font-family: 'Covered By Your Grace', Arial, serif; }

.profileurl{ position:relative; top:-8px; left:5px; font-family:Arial, Helvetica, sans-serif !important; font-size:14px !important; }
.profileurl a{ color:#000; text-decoration:none; font-size:14px; }
.profileurl a:hover{ color:#000; text-decoration:underline; }

.profileedit{ position:absolute; top:35px; right:345px; font-size:20px; }

.profilelist li{ list-style:none; text-indent:0px; display:inline-block; text-align:center; margin-top:20px; margin-bottom:20px; width:120px; height:110px; padding-top:10px; border: 2px dashed #0071BB; color:#333; font-size:72px; font-family: 'Covered By Your Grace', Arial, serif; line-height:30%;;  -moz-border-radius: 10px;  -webkit-border-radius: 10px; -khtml-border-radius: 10px;  border-radius: 10px; }
.profilemargin{ margin-right:57px; }
.errorcolor{ color:red !important; }
</style>
<div class="clear"></div>

<?php

include 'config/connect.php';

$usersql = "SELECT * FROM comptes WHERE id_user=:id_user";
$query = $conn->prepare($usersql);
$query->bindParam(':id_user', $_GET['id_user'], PDO::PARAM_INT);
$query->execute();

while($row_fetch = $query->fetch(PDO::FETCH_ASSOC)){
	$row_id_user = $row_fetch['id_user'];
  $row_username = $row_fetch['username'];
}

?>

<h1 class="profiletitle"><?php echo $row_username ?> <span><span>  </span></h1>

<ul class="profilelist">
	<li class="profilemargin"><h1>Mots Rajoutés</h1><br />0</li>
	<li class="profilemargin"><h1>Yeah! Reçus</h1><br />0</li>
	<li class="profilemargin"><h1>Bof.. Reçus</h1><br />0</li>
	<li><h1>A voté</h1><br />0</li>
</ul>

<div class="clear"></div>

<h1>Aucun mot pour l'instant</h1>


</div> <!-- END OF CLASS LEFT COLUMN -->

<div class="right_column">

<?php

include 'includes/right.php'

?>

</div> <!-- END OF RIGHT COLUMN -->

<div class="clear"></div>

</div> <!-- END OF ID CONTENT -->
<div class="clear"></div>

<?php

include 'includes/pied.php'

?>

</div> <!-- END OF ID WRAPPER -->


<?php

include 'includes/ganalytics.php'

?>

</body>
</html>
