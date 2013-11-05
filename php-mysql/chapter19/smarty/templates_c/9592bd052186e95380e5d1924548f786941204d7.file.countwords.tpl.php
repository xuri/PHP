<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 08:07:04
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/countwords.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1625945491527836a8a30415-36926090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9592bd052186e95380e5d1924548f786941204d7' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/countwords.tpl',
      1 => 1383610023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1625945491527836a8a30415-36926090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527836a8a6bbd5_51225167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527836a8a6bbd5_51225167')) {function content_527836a8a6bbd5_51225167($_smarty_tpl) {?><strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong> (<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['body']->value, $tmp);?>
 words)<br />
<p><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p><?php }} ?>
