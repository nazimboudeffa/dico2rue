<div id="header">
	<span><div id="update" class="hide" ></div></span>
	<div id="header_center">
		<!--<div id="header_vote">
		<a href="http://www.dico2rue.com//validation.php"><img src="http://www.dico2rue.com/img/votez-sans-creer-de-compte.jpg" height="100"  /></a></div>-->
		<a href="index.php"><img id="logo" src="img/header1.gif" alt="Dico 2 rue" /></a>
		<!--<a href="http://www.dico2rue.com//contact/"><img src="http://www.dico2rue.com//img/header2.gif" alt="Dico 2 rue - Bug" /></a>-->
        <br />
		<!--<span id="moto">"Le dico PAR vous, POUR vous"</span>-->
	</div>
	<div class="clear"></div>
	<?php
		if (isset($_SESSION['username'])){
			echo '<div id="access_center">Bienvenue ' . $_SESSION['username'] . ' | <a href="monprofile.php">Mon profil</a> | <a href="forms/logout.php">Déconnexion</a></div>';
		} else {
			//echo '<div id="access_center"><a href="creer-un-compte.php">Cr&egrave;er un compte</a> | <a href="connexion.php">Se connecter</a></div>';
			echo '<div id="access_center"><a href="compte.php">Compte</a></div>';
		}
	?>
	<div class="left" id="menubar">
		<a href="index.php"  class=""  >Mots du jour</a>
		<a href="mots-au-hasard.php"  class=""  >Mots au Hasard</a>
		<a href="dictionnaire.php"  class=""  >Dictionnaire</a>
		<a href="validez-les-nouveautes.php"  class=""  >Validez les nouveautés</a>
		<a href="rajoutez-un-mot.php"  class="menubar_active"  >Rajouter un mot</a>
	</div>
	<div class="right" id="searchbar">
		<form action="dictionnaire.php" method="get" id="searchForm">
			<input type="text" name="q" value="Recherche..." title="Recherche..." class="rounded10" id="mainsearch" style="width:200px;"  />
			<button type="submit">&nbsp;</button>
		</form>
	</div>
	<div class="clear"></div>
<form action="dictionnaire.php" method="get">
	<div id="alphabet">
		<ul id="alphabet_row">
			<li><input type="submit" name="alphabet"  value="A" /></li>
			<li><input type="submit" name="alphabet"  value="B" /></li>
			<li><input type="submit" name="alphabet"  value="C" /></li>
			<li><input type="submit" name="alphabet"  value="D" /></li>
			<li><input type="submit" name="alphabet"  value="E" /></li>
			<li><input type="submit" name="alphabet"  value="F" /></li>
			<li><input type="submit" name="alphabet"  value="G" /></li>
			<li><input type="submit" name="alphabet"  value="H" /></li>
			<li><input type="submit" name="alphabet"  value="I" /></li>
			<li><input type="submit" name="alphabet"  value="J" /></li>
			<li><input type="submit" name="alphabet"  value="K" /></li>
			<li><input type="submit" name="alphabet"  value="L" /></li>
			<li><input type="submit" name="alphabet"  value="M" /></li>
			<li><input type="submit" name="alphabet"  value="N" /></li>
			<li><input type="submit" name="alphabet"  value="O" /></li>
			<li><input type="submit" name="alphabet"  value="P" /></li>
			<li><input type="submit" name="alphabet"  value="Q" /></li>
			<li><input type="submit" name="alphabet"  value="R" /></li>
			<li><input type="submit" name="alphabet"  value="S" /></li>
			<li><input type="submit" name="alphabet"  value="T" /></li>
			<li><input type="submit" name="alphabet"  value="U" /></li>
			<li><input type="submit" name="alphabet"  value="V" /></li>
			<li><input type="submit" name="alphabet"  value="W" /></li>
			<li><input type="submit" name="alphabet"  value="X" /></li>
			<li><input type="submit" name="alphabet"  value="Y" /></li>
			<li><input type="submit" name="alphabet"  value="Z" /></li>
			<li><input type="submit" name="alphabet" class="alphabet_row_active" value=" " style="margin:Opx;" /></li>
		</ul>
	</div>
</form>
</div>
