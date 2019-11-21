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
<table width="100%" class="validate_table">
<tr><td align="center" valign="middle">
<h1>Mots au Hasard</h1>
<div class="word_center">
<div class="words">
<table>
	<!-- ############### START WORD ############# -->

	<?php

	include 'config/connect.php';

	$motsql = "SELECT * FROM mots ORDER BY RAND() LIMIT 1";
	$query = $conn->prepare($motsql);
	$query->execute();

	while($row_fetch = $query->fetch(PDO::FETCH_ASSOC)){
		$row_id_mot = $row_fetch['id_mot'];
		$row_mot = $row_fetch['mot'];
		$row_username = $row_fetch['username'];
		$row_def = $row_fetch['definition'];
		$row_exemple = $row_fetch['exemple'];
		include 'includes/mot.php';
	}

	?>

	<!-- ############### END WORD  ############## -->
<tr>
<td align="center" valign="middle">
<a class=" buttons" href="mots-au-hasard.php">Prochain mot</a>
</td>
</tr>
</table>
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
