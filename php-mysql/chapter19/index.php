<?php

	// put full path to Smarty.class.php
	require('/usr/local/lib/php/Smarty/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir('/var/www/php/php-mysql/chapter19/smarty/templates');
	$smarty->setCompileDir('/var/www/php/php-mysql/chapter19/smarty/templates_c');
	$smarty->setCacheDir('/var/www/php/php-mysql/chapter19/smarty/cache');
	$smarty->setConfigDir('/var/www/php/php-mysql/chapter19/smarty/configs');

	$daysofweek = array("Mon.", "Tues.", "Weds.", "Thurs.", "Fri.", "Sat.", "Sun.");
	$smarty->assign("daysofweek", $daysofweek);
	$smarty->display("daysofweek.tpl");
?>