<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 07:50:07
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149455111527832af4b6330-01227898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f273a9b6b499d12b089ea8c8e3e9773e4b2f446f' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/article.tpl',
      1 => 1383609004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149455111527832af4b6330-01227898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527832af5e9770_82971602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527832af5e9770_82971602')) {function content_527832af5e9770_82971602($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/usr/local/lib/php/Smarty/plugins/modifier.capitalize.php';
?><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>
<?php }} ?>
