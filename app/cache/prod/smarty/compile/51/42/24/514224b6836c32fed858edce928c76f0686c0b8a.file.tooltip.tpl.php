<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:15:23
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52972994358340cabb80d03-10541341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514224b6836c32fed858edce928c76f0686c0b8a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/templates/tooltip.tpl',
      1 => 1479805147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52972994358340cabb80d03-10541341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340cabb86b95_16726779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340cabb86b95_16726779')) {function content_58340cabb86b95_16726779($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
