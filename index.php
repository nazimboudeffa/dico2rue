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

<!-- ############### START WORD ############# -->

<?php

include 'config/connect.php';

$motsql = "SELECT * FROM mots ORDER BY post_time DESC LIMIT 5";
$query = $conn->prepare($motsql);
$query->execute();
$num = $query->rowCount();

while($row_fetch = $query->fetch(PDO::FETCH_ASSOC)){
	$row_id_mot = $row_fetch['id_mot'];
	$row_mot = $row_fetch['mot'];
	$row_username = $row_fetch['username'];
	$row_def = $row_fetch['definition'];
	$row_exemple = $row_fetch['exemple'];
	$row_gif = $row_fetch['gif'];
	include 'includes/mot.php';
}

?>

<!-- ############### END WORD  ############## -->

<div style="clear:both"></div>


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
</html>
