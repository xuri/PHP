<?php /* Smarty version Smarty-3.1.15, created on 2013-11-04 21:30:45
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10295447145277a1859b5ff2-14149683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34660adf372ae31b9371c2612759e6071c45f804' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/welcome.tpl',
      1 => 1383570773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10295447145277a1859b5ff2-14149683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5277a185d6fa08_52822288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5277a185d6fa08_52822288')) {function content_5277a185d6fa08_52822288($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	</head>
	<body>
		<p>
			Hi, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. Welcome to the wonderful world of Smarty.
		</p>
	</body>
</html><?php }} ?>
