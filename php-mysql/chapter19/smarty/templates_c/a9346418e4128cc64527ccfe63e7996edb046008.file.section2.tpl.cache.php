<?php /* Smarty version Smarty-3.1.15, created on 2013-11-12 20:27:08
         compiled from "/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/templates/section2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37535553652821e9c5b13b9-02830347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9346418e4128cc64527ccfe63e7996edb046008' => 
    array (
      0 => '/Users/luxurioust/Sites/php/php-mysql/chapter19/smarty/templates/section2.tpl',
      1 => 1384258617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37535553652821e9c5b13b9-02830347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52821e9c6121e3_83015884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52821e9c6121e3_83015884')) {function content_52821e9c6121e3_83015884($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['book'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['book']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['name'] = 'book';
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['titles']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['book']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['book']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['book']['total']);
?>
	<p>Title: <?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['title'];?>
<br />
	Author: <?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['author'];?>
<br />
	Published: <?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']]['published'];?>
</p>
<?php endfor; endif; ?><?php }} ?>
