<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 08:10:51
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/dateformat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12692459025278378b766ae9-66775202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ce9449e0df967d77361cee89e09206db59e383' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/dateformat.tpl',
      1 => 1383610248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12692459025278378b766ae9-66775202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'filed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5278378b7b5993_17440657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278378b7b5993_17440657')) {function content_5278378b7b5993_17440657($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/Smarty/plugins/modifier.date_format.php';
?><strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong><br />
Submitted on: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['filed']->value,"%B %e, %Y");?>
<?php }} ?>
