<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 08:23:04
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/truncate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82935907052783a68696152-54930133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29115a884bbc1367c9b4dfdc62b715ac2d81d3e8' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/truncate.tpl',
      1 => 1383610976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82935907052783a68696152-54930133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'summaries' => 0,
    'summary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52783a68733103_22535807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52783a68733103_22535807')) {function content_52783a68733103_22535807($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['summary'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['summary']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['summary']->key => $_smarty_tpl->tpl_vars['summary']->value) {
$_smarty_tpl->tpl_vars['summary']->_loop = true;
?>
	<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['summary']->value,35,"...");?>
<br />
<?php } ?><?php }} ?>
