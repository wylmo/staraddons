<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 15:29:36
         compiled from "/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107471020658344e8f3dcb47-35379951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8ffea86a64d68b5bad79cbc1493f78de5f3434' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1479824819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107471020658344e8f3dcb47-35379951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58344e8f3e95d4_27837946',
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58344e8f3e95d4_27837946')) {function content_58344e8f3e95d4_27837946($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
