<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 15:28:49
         compiled from "/Applications/MAMP/htdocs/staraddons/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585185845834302b953c86-21569181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52e4a59dac687232f4f8431f229f63a5d637b2d' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/modules/welcome/views/templates/tooltip.tpl',
      1 => 1479824820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585185845834302b953c86-21569181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5834302b95a068_26856662',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834302b95a068_26856662')) {function content_5834302b95a068_26856662($_smarty_tpl) {?>

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
