<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:54
         compiled from "modules/paypal/views/templates/hook/express_checkout_payment_eu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2916689658343196571bd0-37110273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b158768e1e93dec59f9f3754dab9800e9807601f' => 
    array (
      0 => 'modules/paypal/views/templates/hook/express_checkout_payment_eu.tpl',
      1 => 1479815499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2916689658343196571bd0-37110273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5834319657fab8_89114701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834319657fab8_89114701')) {function content_5834319657fab8_89114701($_smarty_tpl) {?>
<form id="paypal_payment_form_payment" class="paypal_payment_form" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['base_dir_ssl']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post">
	@hiddenSubmit
	<input type="hidden" name="express_checkout" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_current_page']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
</form>
<?php }} ?>
