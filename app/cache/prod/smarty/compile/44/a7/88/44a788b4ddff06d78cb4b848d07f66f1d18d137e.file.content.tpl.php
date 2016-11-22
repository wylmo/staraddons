<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:15:23
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/adminDzSayajin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114575864858340cab8f7705-35614219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a788b4ddff06d78cb4b848d07f66f1d18d137e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/adminDzSayajin/themes/default/template/content.tpl',
      1 => 1479805141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114575864858340cab8f7705-35614219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340cab8fdce0_17816168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340cab8fdce0_17816168')) {function content_58340cab8fdce0_17816168($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
