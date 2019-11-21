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
     url: 'classes/actions.php',
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
	url: 'classes/actions.php',
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
	url: 'classes/actions.php',
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
     url: 'classes/actions.php',
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

	<label>Mot de passe :</label>
	<input type="password" name="rpassword" id="rpassword" class="validate[minSize[6],maxSize[15]]" tabindex="13" />
	<label>Confirmer mot de passe :</label>
	<input type="password" name="rcpassword" id="rcpassword" class="validate[minSize[6],maxSize[15]]" tabindex="14"  />

	<input type="checkbox" name="agree" id="agree" class="validate[required]" style="width:30px;" tabindex="15" /> J'accepte les <a href="index.html" target="_blank">conditions d'utilisation</a> du site.
	<button type="submit" class="buttons right"  name="function" id="register" value="register" tabindex="16">Valider</button>
</form>
</div>
