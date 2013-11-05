<?php

	// put full path to Smarty.class.php
	require('/usr/local/lib/php/Smarty/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir('/var/www/php/php-mysql/chapter19/smarty/templates');
	$smarty->setCompileDir('/var/www/php/php-mysql/chapter19/smarty/templates_c');
	$smarty->setCacheDir('/var/www/php/php-mysql/chapter19/smarty/cache');
	$smarty->setConfigDir('/var/www/php/php-mysql/chapter19/smarty/configs');

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