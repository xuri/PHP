<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 08:16:44
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/striptags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1793474914527838ecbc2a36-35436785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967bd98e644719fca70b0575c068fad71b25da49' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/striptags.tpl',
      1 => 1383610597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1793474914527838ecbc2a36-35436785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527838ecc31f10_01737624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527838ecc31f10_01737624')) {function content_527838ecc31f10_01737624($_smarty_tpl) {?><strong><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title']->value);?>
</strong><?php }} ?>
