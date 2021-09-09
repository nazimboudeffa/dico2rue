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
    	url: 'classes/actions.php',
    	data: $(this).serialize(),
    	dataType : 'json',
    	beforeSend:function(){
    	},
    	success:function(data){
    		if( data.error === false){
    			//Success
    			window.location.href = "nouveau.php?function=Success";
    		}
    		if(data.error === true){
    			//alert('Already voted for this');
    			window.location.href = "rajoutez-un-mot.php";
    		}
    	}
    });
  	return false;
	});
});
</script>

<hr class="rightcol" />

<?php

//include 'ajout-droit.php';

include 'top10mots.php';

?>

<hr class="rightcol" />
<!-- PUB -->

<div class="hide">
<img src="img/voteagainst_hover.gif" alt="preloaders"  /><img src="img/arrow_prev_hover.gif" alt="preloaders"  /><img src="img/votefor_hover.gif" alt="preloaders"  /><img src="img/btn_hover.gif" alt="preloaders"  /><img src="img/oui_hover.gif" alt="preloaders"  /><img src="img/pas_hover.gif" alt="preloaders"  /><img src="img/arrow_hover.gif" alt="preloaders"  /><img src="img/non_hover.gif" alt="preloaders"  /><img src="img/add_word_hover.gif" alt="preloaders"  /><img src="img/arrow_next_hover.gif" alt="preloaders"  />
</div>

<?php

//include 'facebook.php'

?>

<?php

include 'top10users.php'

?>

<hr class="rightcol" />
<!-- PUB -->

</div> <!-- END OF RIGHT COLUMN -->
