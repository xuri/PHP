<?php

	// put full path to Smarty.class.php
	date_default_timezone_set('Asia/Harbin');
	require('/usr/local/lib/php/Smarty/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir('/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/templates');
	$smarty->setCompileDir('/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/templates_c');
	$smarty->setCacheDir('/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/cache');
	$smarty->setConfigDir('/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/configs');

	// Creat the array
	$titles[] = array(
		"title" => "Pro PHP",
		"author" => "Kevin McArthur",
		"piblished" => "2008"
		);
	$titles[] = array(
		"title" => "Beginning Python",
		"author" => "Magnus Lie Hetland",
		"piblished" => "2005"
		);
	$smarty->assign("titles", $titles);
	$smarty->display("section2.tpl");
?>
