
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mots du jour du dictionnaire d&prime;argot | Dico 2 Rue </title><meta content="D&eacute;couvrez  le mot du jour... Dico 2 Rue est le dictionnaire collaboratif de l&prime;argot.  A vous de voter et cr&eacute;er les mots et expressions ainsi que les d&eacute;finitions de ce dico fran&ccedil;ais moderne." name="description" /><meta content="mots du jour, dictionnaire, d&eacute;finition, dico fran&ccedil;ais, argot, expression, dictionnaire fran&ccedil;ais, synonymes, d&eacute;finir, verlan, " name="keywords" /><meta name="robots" content="index, follow" />
<meta http-equiv="Content-Language" content="fr"/>
<link rel="shortcut icon" href="img/favicon.ico" />
<!-- FOR og tags  -->
<meta property="og:country-name" content="FR"/>
<!-- FOR FB to know  -->
<meta property="og:title" content="Dico 2 Rue"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://www.dico2rue.com//mots-au-hasard/"/>
<meta property="og:site_name" content="Dico 2 Rue"/>
<meta property="og:image" content="http://www.dico2rue.com/img/dico2rue.jpg"/>
<!-- GOOGLE FOTNS  -->
<link href="http://fonts.googleapis.com/css?family=Anton:regular&v1" rel="stylesheet" type="text/css">
<link href="css/general.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery144.js"></script>
<!-- MENUBAR -->
<script type="text/javascript" src="js/lavalamp-1-3-3/lib/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/menuslide/js/jquery.spasticNav.js"></script>
<!-- Validator -->
<link rel="stylesheet" href="js/validator/css/validationEngine.jquery.css" type="text/css"/>
<script src="js/validator/js/jquery.validationEngine-fr.js" type="text/javascript" charset="utf-8"></script>
<script src="js/validator/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<!--[if IE ]>
        <link rel="stylesheet" type="text/css" href="css/ifie.css" />
<![endif]-->
<!--FOR SHARE THIS-->
<script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'2595df41-8938-4ada-bb4c-fe56f89fafe9',onhover: false,theme:'3'});</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.voting').click(function(){
		var values = $(this).attr('title');
		values2  = values.split('-');
$.ajax({
	type: 'POST',
	url: 'http://www.dico2rue.com/forms/vote.php',
	data: { 'fun' : values2[0] , 'idW' : values2[1] },
	dataType : 'json',
	beforeSend:function(){
	},
	success:function(data){
		if( data.error === false){
			//Success
			if(values2[0] === 'votedfor'){
				var current = $('#'+values).html();
				current = current*1+1;
				$('#'+values).html(current);
			}
			if(values2[0] === 'votedagainst'){
				var current = $('#'+values).html();
				current = current*1+1;
				$('#'+values).html(current);
			}
			// Change the image file
			$('.fswitch'+values2[1]).removeClass('votefor');
			$('.aswitch'+values2[1]).removeClass('voteagainst');
			$('.fswitch'+values2[1]).addClass('votefordone');
			$('.aswitch'+values2[1]).addClass('voteagainstdone');
			// If on the Validate page, then reload
			if(values2[2] === 'redirect' ){
				window.location.reload(true);
			}
		}
		if(data.error === true){
			//alert('Already voted for this');
		}
	},
	error:function(data){
		//alert('Il y a eu une erreur, priez reloader la page.  Merci');
	}
});
	if(values2[2] === 'redirect' ){
		window.location.reload(true);
	}
	return false;
	});
	// The alphabet effect
	$('#alphabet_row').spasticNav();
	// The Form validator
	//$(".forms").validationEngine('attach');
	// SEARCH BAR
	$('#mainsearch').click(function(){
		var value = $(this).val();
		var defaultval = $(this).attr('title');
		if( value === defaultval ){ $(this).val(''); }
	});
	$('#mainsearch').blur(function(){
		var value = $(this).val();
		var defaultval = $(this).attr('title');
		if( value === '' ){ $(this).val(defaultval); }
	});
	// If there is an error auto fadeout
	$('#alphabet_row input').click(function(){
		var value = $(this).val();
		window.location.href = "http://www.dico2rue.com/dictionnaire/alphabet/"+value+"/";
		return false;
	});
	$('#searchForm').submit(function(){
		//var value = escape($('#mainsearch').val()); alert("http://www.dico2rue.com/dictionnaire/recherche/"+value+"/");
		//window.location.href = "http://www.dico2rue.com/dictionnaire/recherche/"+value+"/";
		//return false;
	});
});
function updatefadeout(){
	$('#update').delay(10000).fadeOut('fast');
}
// ADD A WORD
function AddWord(word,definition,example,url_image){
		var word = $('#word').val();
		var definition = $('#definition').val();
		var example = $('#example').val();
		//var tags = $('#tags').val();
		var url_image = $('#url_image').val();
		if(word === ''){  $('#update').html("Le mot est manquant");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if(definition === ''){  $('#update').html("Il manque une definition");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if(example === ''){  $('#update').html("Il manque un exemple");$('#update').fadeIn('fast');updatefadeout(); return false; }
		if( $("#word").validationEngine('validateField', "#word") === true ){ return false; };
		if( $("#definition").validationEngine('validateField', "#definition") === true ){ return false; };
		if( $("#example").validationEngine('validateField', "#example") === true ){ return false; };
		//if( $("#tags").validationEngine('validateField', "#tags") === true ){ return false; };
$.ajax({
	type: 'POST',
	url: 'http://www.dico2rue.com/classes/actions.php',
	data: { 'action' : 'addWord' ,  'word' : word , 'definition' : definition  , 'example' : example  , 'url_image' : url_image},
	dataType : 'json',
	beforeSend:function(){
		$('#update').html("Verification des informations.");
		$('#update').fadeIn('fast');
		$('#add_disp').fadeOut('fast');
	},
	success:function(data){
		if( data.error === false){
			$('#update').html("Votre mot a été rajouté.");
			//$('#success').fadeIn('fast');
		}
		if(data.error === true){
			$('#update').html("Il y a eu une erreur, priez ressayer");
			$('#add_disp').fadeIn('fast');
		}
	},
	error:function(data){
		//alert();
	}
});
}  // END OF ADD WORD
</script>
</head>
<body>
<div style="background: yellow; color: #000; padding: 20px; text-align: center;">
<p>
Bonjour. Nous sommes désolés de vous annoncer que Dico2Rue sera déconnecté indéfiniment le 31 novembre 2018. Nous n'avons malheureusement plus le temps de gérer ce site.
</p>
</div>
<div id="wrapper">
<div id="header">
	<span><div id="update" class="hide" ></div></span>
	<div id="header_center">
		<!--<div id="header_vote">
		<a href="http://www.dico2rue.com//validation.php"><img src="http://www.dico2rue.com/img/votez-sans-creer-de-compte.jpg" height="100"  /></a></div>-->
		<a href="index.html"><img id="logo" src="http://www.dico2rue.com//img/header1.gif" alt="Dico 2 rue" /></a>
		<!--<a href="http://www.dico2rue.com//contact/"><img src="http://www.dico2rue.com//img/header2.gif" alt="Dico 2 rue - Bug" /></a>-->
        <br />
		<!--<span id="moto">"Le dico PAR vous, POUR vous"</span>-->
	</div>
	<div class="clear"></div>
	<div id="access_center"><a href="creer-un-compte.html">Cr&egrave;er un compte</a> | <a href="connexion.html">Se connecter</a></div>
	<div class="left" id="menubar">
		<a href="index.html"  class=""  >Mots du jour</a>
		<a href="mots-au-hasard.html"  class="menubar_active"  >Mots au Hasard</a>
		<a href="dictionnaire.html"  class=""  >Dictionnaire</a>
		<a href="validez-les-nouveautes.html"  class=""  >Validez les nouveautés</a>
		<a href="rajoutez-un-mot.html"  class=""  >Rajouter un mot</a>
	</div>
	<div class="right" id="searchbar">
		<form action="dictionnaire.html" method="get" id="searchForm">
			<input type="text" name="q" value="Recherche..." title="Recherche..." class="rounded10" id="mainsearch" style="width:200px;"  />
			<button type="submit">&nbsp;</button>
		</form>
	</div>
	<div class="clear"></div>
<form action="dictionnaire.html" method="get">
	<div id="alphabet">
		<ul id="alphabet_row">
			<li><input type="submit" name="alphabet"  value="A" /></li><li><input type="submit" name="alphabet"  value="B" /></li><li><input type="submit" name="alphabet"  value="C" /></li><li><input type="submit" name="alphabet"  value="D" /></li><li><input type="submit" name="alphabet"  value="E" /></li><li><input type="submit" name="alphabet"  value="F" /></li><li><input type="submit" name="alphabet"  value="G" /></li><li><input type="submit" name="alphabet"  value="H" /></li><li><input type="submit" name="alphabet"  value="I" /></li><li><input type="submit" name="alphabet"  value="J" /></li><li><input type="submit" name="alphabet"  value="K" /></li><li><input type="submit" name="alphabet"  value="L" /></li><li><input type="submit" name="alphabet"  value="M" /></li><li><input type="submit" name="alphabet"  value="N" /></li><li><input type="submit" name="alphabet"  value="O" /></li><li><input type="submit" name="alphabet"  value="P" /></li><li><input type="submit" name="alphabet"  value="Q" /></li><li><input type="submit" name="alphabet"  value="R" /></li><li><input type="submit" name="alphabet"  value="S" /></li><li><input type="submit" name="alphabet"  value="T" /></li><li><input type="submit" name="alphabet"  value="U" /></li><li><input type="submit" name="alphabet"  value="V" /></li><li><input type="submit" name="alphabet"  value="W" /></li><li><input type="submit" name="alphabet"  value="X" /></li><li><input type="submit" name="alphabet"  value="Y" /></li><li><input type="submit" name="alphabet"  value="Z" /></li><li><input type="submit" name="alphabet" class="alphabet_row_active" value=" " style="margin:Opx;" /></li>		</ul>
	</div>
</form>
</div>
<div class="clear"></div>
<div id="content">
<div class="left_column">
<table width="100%" class="validate_table">
<tr><td align="center" valign="middle">
<h1>Mots au Hasard</h1>
<div class="word_center">
<div class="words">
<table>
<tr>
<td rowspan="5" class="votes" align="center" valign="top">
	<a href="#" class="voting" title="votedfor-3248">
		<div class="votefor fswitch3248" ></div>
	</a>
	<span id="votedfor-3248">10</span>
	<br /> yeah!
</td>
<td rowspan="5" class="votes" align="center" valign="top">
	<a href="#" class="voting" title="votedagainst-3248">
		<div class="voteagainst aswitch3248" ></div>
	</a>
	<span id="votedagainst-3248">6</span>
	<br /> bof
</td>
<td class="word marg_left">
	[ <a href="index.html">Xoxo</a> ] 
		<br />
</td>
</tr>
<tr>
<td>
	Bisous je t'aime,<br />
"XOXO" s'utilise surtout en message <br />
</td>
</tr>
<tr>
<td colspan="3" class="example marg_left">
	<p>" "je dois partir xoxo bb " "</p>
</td>
</tr>
<tr>
<td colspan="3" class="word_link marg_left" valign="bottom">
	<!--<div class="twitter_count">
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo" data-count="horizontal" data-lang="fr">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</div>
	<div class="facebook_count">
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dico2rue.com%2Fdictionnaire%2Fmot%2F3248%2Fxoxo&amp;layout=button_count&amp;show_faces=false&amp;width=90&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no"  style="border:none; overflow:hidden; width:90px; height:21px;" frameborder="0" allowTransparency="true"></iframe> 
	</div>-->
     <br />
     <span class="st_plusone" st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span> 
     <div style="position:relative; top:-2px; left:34px;">
<span class="st_facebook" st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span>
<span class="st_twitter"  st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span>
<span class="st_linkedin"  st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span>
<span class="st_delicious"  st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span>
<span class="st_email"  st_url="http://www.dico2rue.com/dictionnaire/mot/3248/xoxo"></span>   
</div>  
     <div style="position:relative; top:-34px; left:180px">
		<span>Par <a href="index.html">lilouXD</a></span>
		<span><img src="http://www.dico2rue.com/img/bulb.gif" alt="Pas d'accord" style="position:relative; top:3px;" /><a href="index.html" title="Pas d'accord avec cette d&eacute;fintion? Cliquez et cr&eacute;ez la votre en quelques secondes..."> Pas d'accord?</a></span>     
	</div>
    <div style="position:relative; top:-34px;">
    	 Utilisez-le sur votre site:
        <input type="text" value="<a href='index.html'>Xoxo</a>" style="border:1px solid #CCC; color:#999; width:300px;" />
    </div>
</td>
</tr>
<tr><td colspan="3"  class="word_link marg_left" style="font-size:12px; position:relative; top:-30px;"><a href="index.html"></a></td></tr>
</table>
</div>
</div>
</td></tr>
<tr>
<td align="center" valign="middle">
<a class=" buttons" href="mots-au-hasard.html">Prochain mot</a>
</td>
</tr>
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
