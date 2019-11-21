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
.add_word label{ margin-top:3px; width:100px; }

</style>

<form class="forms" action="/monprofile_edit.php" method="post">

<table width="80%" border="0" class="add_word">
<tr>
	<td colspan="2"><h1>Modifier mes infos</h1></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Age</label></td>
	<td><input type="text" id="age" name="age"  class="validate[custom[integer],maxSize[3]]" value="0" /></td>
</tr>

<tr>
	<td valign="top" align="left"><label>Ville</label></td>
	<td><input type="text" name="country" id="country" class="validate[custom[onlyLetterSp],maxSize[20]]" value="" /></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Mon site web</label></td>
	<td><input type="text" name="website" id="website" class="validate[custom[url],maxSize[60]]" value="" /></td>
</tr>
<tr>
	<td colspan="2"><h1>Modifier mot de passe</h1></td>
</tr>

<tr>
	<td valign="top" align="left"><label>Ancien mot de passe</label></td>
	<td><input type="password" name="password" id="password" class="validate[minSize[6],maxSize[15]]" /></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Nouveau mot de passe</label></td>
	<td><input type="password" name="npassword" id="npassword" class="validate[minSize[6],maxSize[15]]" /></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Confirmez le mot de passe </label></td>
	<td><input type="password" name="ncpassword" id="ncpassword" class="validate[minSize[6],maxSize[15]]" /></td>
</tr>


</table>
<button type="submit" name="update" class="buttons right" value="yes" >Enregistrer</button>
</form>


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
