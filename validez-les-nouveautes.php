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
.validate_table a{ display:inline-block; }
.word_center{ width:500px; min-height:300px; }
#oui{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/oui.gif) no-repeat; margin-right:15px;  }
#oui:hover{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/oui_hover.gif) no-repeat; margin-right:15px;  }
#non{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/non.gif) no-repeat; margin-right:15px;  }
#non:hover{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/non_hover.gif) no-repeat; margin-right:15px;  }
#pas{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/pas.gif) no-repeat; margin-right:15px;  }
#pas:hover{ width:60px; height:56px; background:url(http://www.dico2rue.com/img/pas_hover.gif) no-repeat; margin-right:15px;  }
</style>
<table width="100%" class="validate_table">
<tr><td align="center" valign="middle">
<h1>Pensez-vous que ce mot devrait &ecirc;tre accept&eacute; dans notre Dico?</h1>
<div class="word_center">
<div class="words">
<table>
<tr>
<td align="center" valign="middle">
<a href="validez-les-nouveautes.html" class="voting redirect" title="votedfor-2526-redirect"><div id="oui"></div></a>
<a href="validez-les-nouveautes.html" class="voting redirect" title="votedagainst-2526-redirect"><div id="non"></div></a>
<a href="validez-les-nouveautes.html"><div id="pas"></div></a>
</td>
</tr>
<tr>
<td class="word">[ <a>Embrigader</a> ] <br /></td>
</tr>
<tr>
<td>v.t. Faire entrer,par contrainte ou persuasion,qqn dans une association,un parti,un groupe quelconque ; recruter: embrigader des partisans. Grouper des unit&eacute;s militaires pour former une brigade. <br /></td>
</tr>
<tr>
<td class="example"><p>" Grouper des unit&eacute;s militaires pour former une brigade. "</p></td>
</tr>
<tr>
<td class="word_link" valign="top">
	<span>Par <a href="index.html">therese</a></span>
<tr><td class="word_link" style="font-size:12px">Voir aussi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="index.html"></a></td></tr>
</table>
</div>
</div>
</td></tr>
</table>
</div> <!-- END OF CLASS LEFT COLUMN -->
<div class="right_column">
<script type="text/javascript">
$(document).ready(function(){
	$('#add_right_word').focus(function(){
		$('.add_right_fade').fadeIn('fast');
		$(this).focus();
	});
	$('#right_add_module').submit(function(){
		var checker = $(this).validationEngine('validate');
		if(checker === false){ return false; }
$.ajax({
	type: 'POST',
	url: 'http://www.dico2rue.com/classes/actions.php',
	data: $(this).serialize(),
	dataType : 'json',
	beforeSend:function(){
	},
	success:function(data){
		if( data.error === false){
			//Success
			window.location.href = "http://www.dico2rue.com/nouveau.php?function=Success";
		}
		if(data.error === true){
			//alert('Already voted for this');
			window.location.href = "rajoutez-un-mot.html";
		}
	}
});
	return false;
	});
});
</script>
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=st1&mode=video-games-fr&search=PS4&fc1=000000&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<!-- <a href="http://www.bluelemonparis.com" target="_blank" title="Blue Lemon Paris, Accessoires mode homme"><img src="http://www.dico2rue.com/img/blue-lemon-paris-accessoires-mode-homme.gif" alt="Blue Lemon Paris accessoires mode homme" /></a> -->
<hr class="rightcol" />
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
<div class="top">
<h1 style="color:#000;">Top 10 de tous les temps</h1>
<ul style="position:relative; top:-10px;">
<li>#1 <a href="index.html">Miskine</a></li>
<li>#2 <a href="index.html">Condé</a></li>
<li>#3 <a href="index.html">Tchoin</a></li>
<li>#4 <a href="index.html">Four hollandais</a></li>
<li>#5 <a href="index.html">Chiller</a></li>
<li>#6 <a href="index.html">Mamène</a></li>
<li>#7 <a href="index.html">Michons</a></li>
<li>#8 <a href="index.html">J'ai la taupe qui guigne</a></li>
<li>#9 <a href="index.html">Ca sent le popcorn</a></li>
<li>#10 <a href="index.html">Popcorn F5</a></li>
</ul>
</div>
<hr class="rightcol" />
<div class="hide">
<img src="http://www.dico2rue.com/img/voteagainst_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/arrow_prev_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/votefor_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/btn_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/oui_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/pas_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/arrow_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/non_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/add_word_hover.gif" alt="preloaders"  /><img src="http://www.dico2rue.com/img/arrow_next_hover.gif" alt="preloaders"  />
</div>
<table width="100%" style="margin:10px 0px;">
<tr>
<td align="center" valign="middle">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fdico2rue&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>
</td>
</tr>
</table>
<hr class="rightcol" />
<div class="top">
<h1 style="color:#000;">Top utilisateurs !</h1>
<ul style="position:relative; top:-10px;">
<li>#1 <a href="index.html">DidierSuperSympa</a></li><li>#2 <a href="index.html">thuginho</a></li><li>#3 <a href="index.html">ColdySky</a></li><li>#4 <a href="utilisateur/526/ramonzarate.html">ramonzarate</a></li><li>#5 <a href="index.html">PlaneteMars13</a></li><li>#6 <a href="index.html">Jean-Eusebe</a></li><li>#7 <a href="index.html">Garc</a></li><li>#8 <a href="index.html">desgonzo</a></li><li>#9 <a href="index.html">MisterManiak</a></li><li>#10 <a href="index.html">LeSenEnY</a></li></ul>
</div>
<hr class="rightcol" />
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=bn1&mode=video-games-fr&browse=548738&fc1=333333&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<hr class="rightcol" />
<a href="https://www.webfaction.com/?aid=25557" target="_blank" title="Le lol et wtf du web francais"><img src="img/webfaction.png" alt="Web Faction hosting solution" width="100%" /></a>
<p>
	Meilleur service d'hébergement pour votre site web
</p>
<!-- <hr class="rightcol" /> -->
<!-- <a href="http://www.teeshirtyeswekahn.com" target="_blank" title="tee shirt yes we kahn dominique strauss kahn"><img src="http://www.dico2rue.com/img/tee-shirt-yes-we-kahn.jpg" alt="tee shirt yes we kahn dsk" /></a>
<hr class="rightcol" /> -->
<!-- <a href="http://www.gifgifgifgifgif.com/" target="_blank" title="Gif Gif Gif Gif Gif"><img src="http://www.dico2rue.com/img/gif.gif" width="302" height="250" alt="gif gif gif gif gif"></a> -->
<hr class="rightcol" />
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=bn1&mode=dvd-fr&browse=405322&fc1=333333&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<!-- <a href="http://www.letagparfait.com/" target="_blank" title="Le Tag Parfait"><img src="http://www.dico2rue.com/img/le-tag-parfait.gif" width="302" height="250" alt="le-tag-parfait"></a> -->
</div> <!-- END OF RIGHT COLUMN -->
<div class="clear"></div>
</div> <!-- END OF ID CONTENT -->
<div class="clear"></div>
<table width="100%"  id="footer">
<tr><td align="center">
</td></tr>
<tr><td align="center">
<a href="index.html">FAQ</a> -
<a href="index.html">Conditions d&lsquo;utilisation</a> -
<a href="index.html">Contactez-nous</a>
</td></tr>
<tr>
<td align="center">
<div style="width:728px" id="small_footer">
<span>Dico 2 Rue : Le dictionnaire collaboratif de l'argot français</span><br />
Dico 2 Rue est un dictionnaire collaboratif spécialisé dans l'argot. Véritable site communautaire, ce sont les utilisateurs qui votent pour les meilleurs mots, créent les expressions, les définitions, les exemples et les synonymes. C'est le dico français moderne par excellence<br />
<br />
<span>Le dictionnaire des mots et expressions d'argot français.</span><br />
Dico 2 Rue propose un dictionnaire moderne de mots et d'expressions courantes et moins courantes de la langue française. L'argot des rues, l'argot porno, l'argot geek, l'argot drogué, l'argot des rappeurs, des affaires ... tout y est.<br />
<br />
<span>... un dico par vous et pour vous</span><br />
Dico 2 Rue est un dictionnaire collaboratif. Ce sont les internautes qui votent pour leurs mots et expressions préférées. Les membres peuvent y créer des mots ou des expressions, leurs définitions, des exemples et des synonymes. Chaque membre y possède aussi un espace perso simple et efficace où il peut suivre ses statistiques. Les définitions les plus appréciées se retrouvent dans la section mot du jour. C'est le dico français moderne par excellence...<br /></div>
</td>
</tr>
</table>
</div> <!-- END OF ID WRAPPER -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21701001-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
