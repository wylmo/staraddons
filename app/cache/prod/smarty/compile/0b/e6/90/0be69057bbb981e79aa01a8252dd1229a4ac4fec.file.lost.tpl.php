<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:15:23
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168031964458340cabb6c281-46932104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be69057bbb981e79aa01a8252dd1229a4ac4fec' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/modules/welcome/views/templates/lost.tpl',
      1 => 1479805147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168031964458340cabb6c281-46932104',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340cabb76593_54789292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340cabb76593_54789292')) {function content_58340cabb76593_54789292($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
