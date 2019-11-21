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
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=st1&mode=video-games-fr&search=PS4&fc1=000000&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<!-- <a href="http://www.bluelemonparis.com" target="_blank" title="Blue Lemon Paris, Accessoires mode homme"><img src="img/blue-lemon-paris-accessoires-mode-homme.gif" alt="Blue Lemon Paris accessoires mode homme" /></a> -->
<hr class="rightcol" />

<?php

include 'ajout-droit.php';

include 'top10mots.php';

?>




<hr class="rightcol" />
<div class="hide">
<img src="img/voteagainst_hover.gif" alt="preloaders"  /><img src="img/arrow_prev_hover.gif" alt="preloaders"  /><img src="img/votefor_hover.gif" alt="preloaders"  /><img src="img/btn_hover.gif" alt="preloaders"  /><img src="img/oui_hover.gif" alt="preloaders"  /><img src="img/pas_hover.gif" alt="preloaders"  /><img src="img/arrow_hover.gif" alt="preloaders"  /><img src="img/non_hover.gif" alt="preloaders"  /><img src="img/add_word_hover.gif" alt="preloaders"  /><img src="img/arrow_next_hover.gif" alt="preloaders"  />
</div>
<table width="100%" style="margin:10px 0px;">
<tr>
<td align="center" valign="middle">
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fdico2rue&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=true&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>
</td>
</tr>
</table>
<hr class="rightcol" />

<?php

include 'top10users.php'

?>

<hr class="rightcol" />
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=bn1&mode=video-games-fr&browse=548738&fc1=333333&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<hr class="rightcol" />
<a href="https://www.webfaction.com/?aid=25557" target="_blank" title="Le lol et wtf du web francais"><img src="img/webfaction.png" alt="Web Faction hosting solution" width="100%" /></a>
<p>
	Meilleur service d'hébergement pour votre site web
</p>
<!-- <hr class="rightcol" /> -->
<!-- <a href="http://www.teeshirtyeswekahn.com" target="_blank" title="tee shirt yes we kahn dominique strauss kahn"><img src="img/tee-shirt-yes-we-kahn.jpg" alt="tee shirt yes we kahn dsk" /></a>
<hr class="rightcol" /> -->
<!-- <a href="http://www.gifgifgifgifgif.com/" target="_blank" title="Gif Gif Gif Gif Gif"><img src="img/gif.gif" width="302" height="250" alt="gif gif gif gif gif"></a> -->
<hr class="rightcol" />
<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=di2ru-21&o=8&p=12&l=bn1&mode=dvd-fr&browse=405322&fc1=333333&lt1=_blank&lc1=0071BB&bg1=FFFFFF&f=ifr" marginwidth="0" marginheight="0" width="300" height="250" border="0" frameborder="0" style="border:none;" scrolling="no"></iframe>
<!-- <a href="http://www.letagparfait.com/" target="_blank" title="Le Tag Parfait"><img src="img/le-tag-parfait.gif" width="302" height="250" alt="le-tag-parfait"></a> -->
</div> <!-- END OF RIGHT COLUMN -->
