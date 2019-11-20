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
<script type="text/javascript">
$(document).ready(function(){
	$('#valider').click(function(){
		return AddWord();
	});
});
</script>
<div id="ad_display" class="forms">
<table width="100%" border="0" class="add_word">
<tr>
	<td valign="top" align="left"><label>Votre mot :</label></td>
	<td><input type="text" name="word" id="word"  class="validate[required,minSize[2],maxSize[50]]" value="" /></td>
</tr>
<tr>
	<td colspan="2"><h1>La définition</h1></td>
</tr>
<tr>
	<td valign="top" align="left"><label>N’oubliez pas :</label></td>
	<td valign="top">Ecrivez pour un public large en essayant d'éviter les abbréviations, le langage texto et les fautes d’orthographe<br /><br /></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Votre définition :</label></td>
	<td><textarea name="definition" id="definition"  class="validate[required,minSize[2],maxSize[1000]]" ></textarea></td>
</tr>
<tr>
	<td valign="top" align="left"><label>Votre exemple :</label></td>
	<td><textarea name="example" id="example"  class="validate[required,minSize[5],maxSize[1000]]" ></textarea></td>
</tr>
<!--<tr>
	<td valign="top" align="left"><label>Synonymes :</label></td>
	<td><input type="text" name="tags" class="validate[custom[onlyLetterSp],minSize[3],maxSize[200]]" value="" /></td>
</tr>
<tr>
	<td></td>
	<td><p class="moveup">Mettez, si vous voulez, des mots similaires ou synonymes séparés par une VIRGULE</p>  </td>
</tr>-->
<tr>
	<td valign="top" align="left"><label>URL de l'image :</label></td>
	<td><input type="text" name="url_image" id="url_image" value="" /></td>
</tr>
<tr>
	<td></td>
	<td><p class="moveup">Merci d’entrer l'URL de l'image que vous souhaitez ajouter. Pour cela, trouvez une image sur le web, cliquez droit et choisissez "copier l'URL de l'image" puis copier ici.</p>  </td>
</tr>
</table>
<script type="text/javascript">
$(document).ready(function(){
	// FORGOTTEN EMAIL
	$('#forgottenbutton').click(function(){
			$('#forgottencontent').fadeIn('fast');
			return false;
	});
	$('#forgotten').click(function(){
		var email = $('#femail').val();
	     if(email === ''){  $('#update').html("Il manque un email");$('#update').fadeIn('fast');updatefadeout(); return false; }           if( $("#femail").validationEngine('validateField', "#femail") === true ){ return false; };
$.ajax({
     type: 'POST',
     url: 'http://www.dico2rue.com/classes/actions.php',
     data: { 'action' :  'login_forgotten', 'email' : email },
     dataType : 'json',
     beforeSend:function(){
          $('#update').html("Verification de votre email...");
          $('#update').fadeIn('fast');
     },
     success:function(data){
          if( data.error === false){
               $('#update').html("Un email avec votre nouveau mot de passe vous a été envoyé, vous le recevrez sous peu.");
               updatefadeout();
          }
          if(data.error === true){
               $('#update').html("Votre email n\'est pas dans notre base de données.");
               updatefadeout();
          }
     },
     error:function(data){
          //alert("Il y a une erreur.  Priez reloader la page.");
     }
});
          return false;
     });
	// REGISTER
	$('#registerForm').submit(function(){
		var check = $(this).validationEngine('validate');
		if(check === false){ return false; }
		values = new Array();
		values['remail'] = $('#remail').val();
		values['rusername'] = $('#rusername').val();
		values['agree'] = $('#agree').attr('checked');
		if(values['rusername'] == ''){  $('#update').html("Il manque un pseudo");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if(values['remail'] == ''){  $('#update').html("Il manque un email");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if(values['agree'] == false){  $('#update').html("Merci d'accepter les conditions d'utilisation pour créer votre compte");$('#update').fadeIn('fast');updatefadeout(); return false; }
	var checkeremail = $("#remail").validationEngine('validateField', "#remail");
	if( checkeremail === true ){
		 $('#update').html("Il manque un pseudo");$('#update').fadeIn('fast');updatefadeout();
		return false;
	};
	var checkerusername = $("#rusername").validationEngine('validateField', "#rusername");
	if( checkerusername === true ){
		$('#update').html("Il manque un email");$('#update').fadeIn('fast');updatefadeout();
		return false;
	};
	var register_next = false;
// Check the pseudo and email are not already existant
$.ajax({
	type: 'POST',
	url: 'http://www.dico2rue.com/classes/actions.php',
	data: { 'action' : 'check' , 'email' : values['remail'] , 'username' : values['rusername'] },
	dataType : 'json',
	beforeSend:function(){
		$('#update').html("Vérification de la disponibilité de votre Pseudo et email.");
		$('#update').fadeIn('fast');
	},
	success:function(data){
		if( data.error === false){
			//var is_it_ok = true;
			$('#update').html("Pseudo et email ok");
			updatefadeout();
///////////////////////////////////////
$.ajax({
	type: 'POST',
	url: 'http://www.dico2rue.com/classes/actions.php',
	data: { 'action' : 'register' , 'remail' : values['remail'] , 'rusername' : values['rusername']   },
	dataType : 'json',
	beforeSend:function(){
		$('#update').html("Enregistrement de vos information");
		$('#update').fadeIn('fast');
	},
	success:function(data){
		if( data.error === false){
			$('#update').html("Vous êtes maintenant connecté");
			updatefadeout();
			if ($("#word").length > 0){
				return AddWord();
			} else {
			}
		}
		if(data.error === true){
			$('#update').html("Il y a une erreur dans les informations, priez vérifier");
			updatefadeout();
			return false;
		}
	},
	error:function(data){
		//alert("Il y a une erreur.  Priez reloader la page.");
	}
});
///////////////////////////////////////
		}
		if(data.error === true){
			$('#femail').val(values['remail']);
			$('#forgottencontent').fadeIn('fast');
			if(data.src === 'email'){
				$('#update').html("Votre email est enregistré sous un autre pseudo, vous avez oublié votre mot de passe?");
			}
			if(data.src === 'username'){
				$('#update').html("Votre pseudo est déjà pris, merci d'en trouver un autre");
			}
			updatefadeout();
			return false;
		}
	},
	error:function(data){
		//alert("Il y a une erreur.  Priez reloader la page.");
	}
});
		return false
	});
	$('#loginForm').submit(function(){
		var check = $(this).validationEngine('validate');
		if(check === false){ return false; }
		var lemail = $('#lemail').val();
		var lpassword = $('#lpassword').val();
	     if(lemail === ''){  $('#update').html("Il manque un email");$('#update').fadeIn('fast');updatefadeout(); return false; }
	     if(lpassword === ''){  $('#update').html("Il manque un mot de passe");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if( $("#lemail").validationEngine('validateField', "#lemail") === true ){ return false; };
		if( $("#lpassword").validationEngine('validateField', "#lpassword") === true ){ return false; };
$.ajax({
     type: 'POST',
     url: 'http://www.dico2rue.com/classes/actions.php',
     data: { 'lemail' : lemail , 'lpassword' : lpassword , 'action' : 'login' },
     dataType : 'json',
     beforeSend:function(){
          $('#update').html("Verification des informations.");
          $('#update').fadeIn('fast');
     },
     success:function(data){
          if( data.error === false){
               $('#update').html("Vous êtes maintenant connecté");
               updatefadeout();
			if ($("#word").length > 0){
				return AddWord();
			} else {
			}
          }
          if(data.error === true){
               $('#update').html("Erreur sur l'email ou le mot de passe");
			return false;
          }
     },
     error:function(data){
     }
});
		return false;
	});
});
</script>
<style>
.accessLeft{ width:45%; }
.accessRight{ width:45%; padding-left:20px; border-left: 2px dashed #0071BB; }
.loginregister input{ width:98%; }
.logregborder{ border-bottom: 2px dashed #0071BB; margin-bottom:20px; width:100% }
.buttons{ position:relative; top:-30px; }
.moveup span{ font-weight:bold; }
</style>
<div class="left accessLeft loginregister">
	<h1>Déjà inscrit?</h1>
<form method="post" action="" id="loginForm" class="forms">
	<label>Votre email :</label>
	<input type="text" name="lemail" id="lemail" class="validate[custom[email]]" value="" tabindex="6" />
	<label>Mot de passe :</label>
	<input type="password" name="lpassword" id="lpassword" class="validate[minSize[6],maxSize[15]]" tabindex="7" />
	<button type="submit" class="buttons right" name="function" value="login" id="login" tabindex="8">Connexion</button>
</form>
	<div class="clear"></div>
	<a href="#" id="forgottenbutton">Mot de passe oublié?</a>
	<div class="hide" id="forgottencontent">
	<br>
	<label>Votre email :</label>
	<input type="text" name="femail" id="femail" class="validate[custom[email]]" value="" tabindex="9" />
	<button type="button" id="forgotten" class="buttons right" tabindex="10">Récuperer</button>
	</div>
</div>
<div class="right accessRight loginregister">
	<h1>Inscription en 2 secondes</h1>
<form method="post" action="" id="registerForm" class="forms">
	<label>Votre pseudo :</label>
	<input type="text" name="rusername" id="rusername" class="validate[required,minSize[3],custom[onlyLetterNumber]]" value="" tabindex="11"  />
	<label>Votre email :</label>
	<input type="text" name="remail" id="remail" class="validate[required,custom[email]]" value="" tabindex="12" />
	<p class="moveup"><span>Utilisez une vraie adresse Email !</span><br />Votre mot de passe vous sera envoyé, vous permettant ensuite de voir vos mots et gérer votre profil.</p><br />
<!--
	<label>Mot de passe :</label>
	<input type="password" name="rpassword" id="rpassword" class="validate[minSize[6],maxSize[15]]" tabindex="13" />
	<label>Confirmer mot de passe :</label>
	<input type="password" name="rcpassword" id="rcpassword" class="validate[minSize[6],maxSize[15]]" tabindex="14"  />
-->
	<input type="checkbox" name="agree" id="agree" class="validate[required]" style="width:30px;" tabindex="15" /> J'accepte les <a href="index.html" target="_blank">conditions d'utilisation</a> du site.
	<button type="submit" class="buttons right"  name="function" id="register" value="register" tabindex="16">Valider</button>
</form>
</div>
<div class="clear"></div>
</div>
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
