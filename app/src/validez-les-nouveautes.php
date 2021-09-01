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

<?php

include 'includes/right.php'

?>

</div> <!-- END OF RIGHT COLUMN -->
<div class="clear"></div>
</div> <!-- END OF ID CONTENT -->
<div class="clear"></div>
<?php

include 'includes/pied.php'

?>
</div> <!-- END OF ID WRAPPER -->
<?php

include 'includes/ganalytics.php'

?>
</body>
</html>
