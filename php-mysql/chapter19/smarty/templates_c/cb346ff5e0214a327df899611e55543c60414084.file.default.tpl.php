<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 08:13:48
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13849450252783819335b53-45318144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb346ff5e0214a327df899611e55543c60414084' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/default.tpl',
      1 => 1383610423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13849450252783819335b53-45318144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527838193892b3_98858685',
  'variables' => 
  array (
    'title' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527838193892b3_98858685')) {function content_527838193892b3_98858685($_smarty_tpl) {?><strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong><br />
Author: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['author']->value)===null||$tmp==='' ? "Anonymous" : $tmp);?>
<?php }} ?>
