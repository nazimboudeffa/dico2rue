$(document).ready(function(){
	$('.voting').click(function(){
		var values = $(this).attr('title');
		values2  = values.split('-');
		$.ajax({
		type: 'POST',
		url: 'forms/vote.php',
		data: { 'fun' : values2[0] , 'idW' : values2[1] },
		dataType : 'json',
		beforeSend:function(data){
			console.log(data);
		},
		success:function(data){
			console.log(data);
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
				alert(data.message);
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
	/*
	$('#alphabet_row input').click(function(){
		var value = $(this).val();
		window.location.href = "dictionnaire/alphabet/"+value+"/";
		return false;
	});
	*/
	$('#searchForm').submit(function(){
		//var value = escape($('#mainsearch').val()); alert("dictionnaire/recherche/"+value+"/");
		//window.location.href = "dictionnaire/recherche/"+value+"/";
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
			url: 'classes/actions.php',
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
					window.location.href = "index.php";
				}
				if(data.error === true){
					$('#update').html("Il y a eu une erreur, priez ressayer");
					$('#add_disp').fadeIn('fast');
				}
			},
			error:function(data){
				alert("Il y a une erreur quelque part");
			}
		});
}  // END OF ADD WORD
