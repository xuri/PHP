<?php /* Smarty version Smarty-3.1.15, created on 2013-11-04 19:18:14
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21430970665277827651bcb3-33661589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1383475689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21430970665277827651bcb3-33661589',
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
  'unifunc' => 'content_52778276553a05_22235713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52778276553a05_22235713')) {function content_52778276553a05_22235713($_smarty_tpl) {?><html>
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
