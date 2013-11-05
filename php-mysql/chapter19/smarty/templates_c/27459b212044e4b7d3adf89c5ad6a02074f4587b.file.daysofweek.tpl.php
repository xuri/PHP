<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 17:17:15
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/daysofweek.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8027725305278b79b67e829-38846410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27459b212044e4b7d3adf89c5ad6a02074f4587b' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/daysofweek.tpl',
      1 => 1383643033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8027725305278b79b67e829-38846410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'daysofweek' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5278b79b6f7a73_49320268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b79b6f7a73_49320268')) {function content_5278b79b6f7a73_49320268($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['daysofweek']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
<br />
<?php } ?><?php }} ?>
