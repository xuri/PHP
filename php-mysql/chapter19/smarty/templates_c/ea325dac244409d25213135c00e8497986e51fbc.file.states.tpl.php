<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 17:25:05
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/states.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7803941575278b971e67353-42017148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea325dac244409d25213135c00e8497986e51fbc' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/states.tpl',
      1 => 1383643503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7803941575278b971e67353-42017148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'states' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5278b971e9bf40_53115456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b971e9bf40_53115456')) {function content_5278b971e9bf40_53115456($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 <br />
<?php } ?><?php }} ?>
