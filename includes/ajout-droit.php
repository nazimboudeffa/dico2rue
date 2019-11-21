<div id="add_right">
<h1>Rajoutez un mot au Dico</h1>
<form action="" id="right_add_module" method="get">
<table width="100%" border="0" cellspacing="0">
<tr>
	<td valign="top" width="10%"><p>Mot:</p></td>
	<td><input type="text" name="word" id="add_right_word" class="validate[required,minSize[2],maxSize[50]]"></td>
</tr>
<tr class="hide add_right_fade">
	<td valign="top"><p>Définition:</p></td>
	<td><textarea name="definition" id="defintioin2" class="validate[required,minSize[2],maxSize[1000]]" ></textarea></td>
</tr>
<tr class="hide add_right_fade">
	<td valign="top"><p>Exemple:</p></td>
	<td><textarea name="example" id="example2"  class="validate[required,minSize[5],maxSize[1000]]"></textarea></td>
</tr>
<tr class="hide add_right_fade">
	<td valign="top"><p>URL image:</p></td>
	<td><input type="text" name="url_image" id="url_image"><br><br></td>
</tr>
</table>
	<input type="hidden" name="action" value="right_add_module">
	<button type="submit" name="function" value="add" id="valider" class="buttons right hide add_right_fade" style="margin-left:290px">Valider</button>
	<div class="clear"></div>
</form>
</div>
