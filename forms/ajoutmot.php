<script type="text/javascript">
$(document).ready(function(){
	$('#valider').click(function(){
		return AddWord();
	});
});
</script>
<div id="ad_display" class="forms">
<table class="add_word" width="100%" border="0">
<tbody><tr>
	<td valign="top" align="left"><label>Votre mot :</label></td>
	<td><input type="text" name="word" id="word" class="validate[required,minSize[2],maxSize[50]]" value=""></td>
</tr>

<tr>
	<td colspan="2"><h1>La définition</h1></td>
</tr>

<tr>
	<td valign="top" align="left"><label>N’oubliez pas :</label></td>
	<td valign="top">Ecrivez pour un public large en essayant d'éviter les abbréviations, le langage texto et les fautes d’orthographe<br><br></td>
</tr>

<tr>
	<td valign="top" align="left"><label>Votre définition :</label></td>
	<td><textarea name="definition" id="definition" class="validate[required,minSize[2],maxSize[1000]]"></textarea></td>
</tr>

<tr>
	<td valign="top" align="left"><label>Votre exemple :</label></td>
	<td><textarea name="example" id="example" class="validate[required,minSize[5],maxSize[1000]]"></textarea></td>
</tr>

<!--<tr>
	<td valign="top" align="left"><label>Synonymes :</label></td>
	<td><input type="text" name="tags" class="validate[custom[onlyLetterSp],minSize[3],maxSize[200]]" value="" /></td>
</tr>

<tr>
	<td></td>
	<td><p class="moveup">Mettez, si vous voulez, des mots similaires ou synonymes séparés par une VIRGULE</p>  </td>
</tr>

<tr>
	<td valign="top" align="left"><label>URL de l'image :</label></td>
	<td><input type="text" name="url_image" id="url_image" value=""></td>
</tr>

<tr>
	<td></td>
	<td><p class="moveup">Merci d’entrer l'URL de l'image que vous souhaitez ajouter. Pour cela, trouvez une image sur le web, cliquez droit et choisissez "copier l'URL de l'image" puis copier ici.</p>  </td>
</tr>

-->

</tbody></table>



	<br>
	<button type="submit" name="function" value="add" id="valider" class="buttons left" style="margin-left:290px">Valider</button>
</div>
