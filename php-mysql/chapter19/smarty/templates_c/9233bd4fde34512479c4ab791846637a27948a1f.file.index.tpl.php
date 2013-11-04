<?php /* Smarty version Smarty-3.1.15, created on 2013-11-04 19:21:58
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1217939719527783567fa1f8-97718329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9233bd4fde34512479c4ab791846637a27948a1f' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/index.tpl',
      1 => 1383475689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1217939719527783567fa1f8-97718329',
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
  'unifunc' => 'content_527783568378b1_93610324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527783568378b1_93610324')) {function content_527783568378b1_93610324($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	</head>
	<body>
	<?php if ($_smarty_tpl->tpl_vars['name']->value=="Kirk") {?>
		<p>Welcome back Captin!</p>
	<?php } else { ?>
		<p>Swab the decks, mate!</p>
	<?php }?>
	</body>
</html><?php }} ?>
