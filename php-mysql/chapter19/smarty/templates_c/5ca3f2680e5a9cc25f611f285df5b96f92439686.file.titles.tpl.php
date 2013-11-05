<?php /* Smarty version Smarty-3.1.15, created on 2013-11-05 17:29:58
         compiled from "/var/www/php/php-mysql/chapter19/smarty/templates/titles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6548175585278ba96ae6314-51575024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca3f2680e5a9cc25f611f285df5b96f92439686' => 
    array (
      0 => '/var/www/php/php-mysql/chapter19/smarty/templates/titles.tpl',
      1 => 1383643797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6548175585278ba96ae6314-51575024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5278ba96b20180_91715167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278ba96b20180_91715167')) {function content_5278ba96b20180_91715167($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['book'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['book']);
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
	<?php echo $_smarty_tpl->tpl_vars['titles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['book']['index']];?>
<br />
<?php endfor; endif; ?><?php }} ?>
