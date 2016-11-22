<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:15:23
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109388304258340cabb5ba21-18803804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8295cf2deb8761f537a94f8f1cb9c0cddff3075e' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/navbar.tpl',
      1 => 1479805147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109388304258340cabb5ba21-18803804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340cabb677d1_70039160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340cabb677d1_70039160')) {function content_58340cabb677d1_70039160($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
