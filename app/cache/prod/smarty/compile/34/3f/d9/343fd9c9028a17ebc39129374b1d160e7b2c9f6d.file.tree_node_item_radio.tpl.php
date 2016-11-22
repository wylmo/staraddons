<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 15:29:36
         compiled from "/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123831716658344e8f3ef765-89402134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343fd9c9028a17ebc39129374b1d160e7b2c9f6d' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1479824819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123831716658344e8f3ef765-89402134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58344e8f4029f7_81598600',
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58344e8f4029f7_81598600')) {function content_58344e8f4029f7_81598600($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
