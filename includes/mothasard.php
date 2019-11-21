<?php

$t = 1;
$f = 0;

$vforsql = "SELECT COUNT(*) FROM votes WHERE id_mot=:id_mot AND up=1";
$result = $conn->prepare($vforsql);
$result->bindParam(':id_mot', $row_id_mot, PDO::PARAM_INT);
//$result->bindParam(':up', $t, PDO::PARAM_INT);
$result->execute();
$number_of_rows_for = $result->fetchColumn();

$vagainstsql = "SELECT COUNT(*) FROM votes WHERE id_mot=:id_mot AND down=:down";
$result = $conn->prepare($vagainstsql);
$result->bindParam(':id_mot', $row_id_mot, PDO::PARAM_INT);
$result->bindParam(':down', $t, PDO::PARAM_INT);
$result->execute();
$number_of_rows_against = $result->fetchColumn();

?>

<div class="words">
<table>
<tr>
<td rowspan="5" class="votes" align="center" valign="top">
	<a href="#" class="voting" title="votedfor-<?php echo $row_id_mot ?>">
		<div class="votefor fswitch<?php echo $row_id_mot ?>" ></div>
	</a>
	<span id="votedfor-<?php echo $row_id_mot ?>"><?php echo $number_of_rows_for ?></span>
	<br /> yeah!
</td>
<td rowspan="5" class="votes" align="center" valign="top">
	<a href="#" class="voting" title="votedagainst-<?php echo $row_id_mot ?>">
		<div class="voteagainst aswitch<?php echo $row_id_mot ?>" ></div>
	</a>
	<span id="votedagainst-<?php echo $row_id_mot ?>"><?php echo $number_of_rows_against ?></span>
	<br /> bof
</td>
<td class="word marg_left">
	[ <a href="dictionnaire.php?id_mot=<?php echo $row_id_mot ?>"><?php echo $row_mot ?></a> ]
</td>
</tr>
<tr>
<td>
	<?php echo $row_def ?> <br />
</td>
</tr>
<tr>
<td colspan="3" class="example marg_left">
	<p>" <?php echo $row_exemple ?> "
	</p>
</td>
</tr>

<td colspan="3" class="word_link marg_left" valign="bottom">
	<!--<div class="twitter_count">
		<a href="http://twitter.com/share" class="twitter-share-button" data-url="dictionnaire/mot/1700/chiller" data-count="horizontal" data-lang="fr">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	</div>
	<div class="facebook_count">
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dico2rue.com%2Fdictionnaire%2Fmot%2F1700%2Fchiller&amp;layout=button_count&amp;show_faces=false&amp;width=90&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no"  style="border:none; overflow:hidden; width:90px; height:21px;" frameborder="0" allowTransparency="true"></iframe>
	</div>-->
  <br />
  <div style="position:relative; top:-2px; left:34px;">
		<span data-sharer="facebook" data-hashtag="dico2rue" data-url="#"><i class="fa fa-2x fa-facebook-square" style="color:#3c5a99"></i></span>
		<span data-sharer="twitter" data-title="Je kiffe ce mot!" data-hashtags="dico2rue" data-url="#"><i class="fa fa-2x fa-twitter-square" style="color:#00acee"></i></span>
	</div>
  <div style="position:relative; top:-34px; left:180px">
		<span>Par <?php echo $row_username ?></span>
		<span><img src="img/bulb.gif" alt="Pas d'accord" style="position:relative; top:3px;" /><a href="rajoutez-un-mot.php" title="Pas d'accord avec cette d&eacute;fintion? Cliquez et cr&eacute;ez la votre en quelques secondes..."> Pas d'accord?</a></span>
	</div>
</td>
</tr>
<tr><td colspan="3"  class="word_link marg_left" style="font-size:12px; position:relative; top:-30px;"><a href="index.html"></a></td></tr>
</table>
</div>
