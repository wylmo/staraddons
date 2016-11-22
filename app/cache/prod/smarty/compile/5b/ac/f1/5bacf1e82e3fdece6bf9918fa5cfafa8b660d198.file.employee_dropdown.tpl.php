<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 15:28:48
         compiled from "/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/new-theme/template/components/layout/employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115604840058343037e56056-49644468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bacf1e82e3fdece6bf9918fa5cfafa8b660d198' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/admin560sfdxgf/themes/new-theme/template/components/layout/employee_dropdown.tpl',
      1 => 1479824819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115604840058343037e56056-49644468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58343037e6c0e3_38173716',
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58343037e6c0e3_38173716')) {function content_58343037e6c0e3_38173716($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="img-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right p-a-1 m-r-2">
    <div class="text-xs-center">
      <img class="avatar img-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>

    </div>
    <hr>
    <a class="employee-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee" target="_blank">
      <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

    </a>
    <a class="employee-link m-t-1" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
      <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Log out'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>
