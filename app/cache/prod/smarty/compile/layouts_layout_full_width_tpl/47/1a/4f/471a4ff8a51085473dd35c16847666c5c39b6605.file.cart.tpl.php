<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13532754995834319438a2f0-73280388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471a4ff8a51085473dd35c16847666c5c39b6605' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/cart.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'e2c7943b52fd62472585c586d5d40a3fbd7836b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/layouts/layout-full-width.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '41c2b6280f8f6d21a107a38a813087faab998965' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'ca590478b82658da0a4c8b58436ce2716cb67ba7' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/stylesheets.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '51c69971f868abbdb1de0135aaa4c4c612ec328e' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/javascript.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '55ed7df35e66b6f5569868a3abde73d869c1dab0' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/head.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'b191a953b3768975b7a6a27efb7ffcf4f45308f3' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/catalog/_partials/product-activation.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'd198109520bbe67fffb43437c0b431170ec075ed' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/header.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '63dbd4e2fdf756ab07ef0ff447593e2f6fed2105' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/notifications.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '73c0f59ec0852f3ee1c071092f2676215f371135' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'bdac64a64e5168e418f7ad52485e2419b03791c9' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-product-line.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '66ef3fda7b50a984ccd0412c3f0009f6b33370d8' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'ecce377520d5fa827eafabd93199ab629a46f856' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    'f56e9ca6d4fd6bea754acc7170a46a9e73860fe5' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-totals.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '6084e41fd21df55c2488cfd4d6f6e5f94a431137' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
    '2eaf2ea8c84e4e79fd0c705aec2f971ac343127d' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/footer.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13532754995834319438a2f0-73280388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583431946371e4_31549729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583431946371e4_31549729')) {function content_583431946371e4_31549729($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_583431943e74d7_06946595($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>


    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_58343194446b64_06925366($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_58343194452944_17479580($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_58343194462f60_76360757($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      <section id="wrapper">
        <div class="container">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_58343194482195_86573337($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    

  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo smartyTranslate(array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</h1>
          </div>
          <hr>
          
            <?php /*  Call merged included template "checkout/_partials/cart-detailed.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '13532754995834319438a2f0-73280388');
content_583431944a8ff0_10902903($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed.tpl" */?>
          
        </div>

        
          <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo smartyTranslate(array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
        

        <!-- shipping informations -->
        <div>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCartFooter'),$_smarty_tpl);?>

        </div>
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        
          <div class="card cart-summary">

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCart'),$_smarty_tpl);?>


            
              <?php /*  Call merged included template "checkout/_partials/cart-detailed-totals.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '13532754995834319438a2f0-73280388');
content_58343194542864_92436841($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-totals.tpl" */?>
            

            
              <?php /*  Call merged included template "checkout/_partials/cart-detailed-actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '13532754995834319438a2f0-73280388');
content_583431945b2ff7_60037908($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-actions.tpl" */?>
            

          </div>
        

        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayReassurance'),$_smarty_tpl);?>

        

      </div>

    </div>
  </section>

  </div>


          
        </div>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_5834319461fe23_64297066($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '13532754995834319438a2f0-73280388');
content_5834319441e967_54831105($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>


  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_583431943e74d7_06946595')) {function content_583431943e74d7_06946595($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '13532754995834319438a2f0-73280388');
content_5834319440a389_49804336($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '13532754995834319438a2f0-73280388');
content_5834319441e967_54831105($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5834319440a389_49804336')) {function content_5834319440a389_49804336($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5834319441e967_54831105')) {function content_5834319441e967_54831105($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194446b64_06925366')) {function content_58343194446b64_06925366($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194452944_17479580')) {function content_58343194452944_17479580($_smarty_tpl) {?>

  <nav class="header-nav">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down">
            <div class="col-md-4 col-xs-12">
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

            </div>
            <div class="col-md-8 right-nav">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

            </div>
          </div>
          <div class="hidden-md-up text-xs-center mobile">
            <div class="pull-xs-left" id="menu-icon">
              <i class="material-icons">&#xE5D2;</i>
            </div>
            <div class="pull-xs-right" id="_mobile_cart"></div>
            <div class="pull-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>



  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-md-10 col-sm-12 position-static">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194462f60_76360757')) {function content_58343194462f60_76360757($_smarty_tpl) {?>

<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>
  </div>
</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194482195_86573337')) {function content_58343194482195_86573337($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed.tpl" */ ?>
<?php if ($_valid && !is_callable('content_583431944a8ff0_10902903')) {function content_583431944a8ff0_10902903($_smarty_tpl) {?>
<div class="cart-overview js-cart" data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl);?>
">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
  <ul class="cart-items">
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
      <li class="cart-item"><?php /*  Call merged included template "checkout/_partials/cart-detailed-product-line.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '13532754995834319438a2f0-73280388');
content_583431944bd803_16537698($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-product-line.tpl" */?></li>
      <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])>1) {?>
      <hr>
      <?php }?>
    <?php } ?>
  </ul>
  <?php } else { ?>
    <span class="no-items"><?php echo smartyTranslate(array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
  <?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-product-line.tpl" */ ?>
<?php if ($_valid && !is_callable('content_583431944bd803_16537698')) {function content_583431944bd803_16537698($_smarty_tpl) {?>
<div class="product-line-grid">
  <!--  product left content: image-->
  <div class="product-line-grid-left col-md-3 col-xs-4">
    <span class="product-image media-middle">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'quotes'), ENT_QUOTES, 'UTF-8');?>
">
    </span>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-body col-md-4 col-xs-8">
    <div class="product-line-info">
      <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>

    <div class="product-line-info">
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
        <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
      <?php }?>
    </div>

    <br/>

    <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
      <div class="product-line-info">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } ?>

    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
      <br/>
      <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
        <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
        <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
              </div>
              <div class="modal-body">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                  <div class="product-customization-line row">
                    <div class="col-sm-3 col-xs-4 label">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="col-sm-9 col-xs-8 value">
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                        <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                          <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                        <?php } else { ?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                      <?php }?>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    <?php }?>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
    <div class="row">
      <div class="col-xs-4 hidden-md-up"></div>
      <div class="col-md-10 col-xs-6">
        <div class="row">
          <div class="col-md-6 col-xs-6 qty">
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
              <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
              <input
                class="js-cart-line-product-quantity"
                data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                name="product-quantity-spin"
                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
              />
            <?php }?>
          </div>
          <div class="col-md-6 col-xs-2 price">
            <span class="product-price">
              <strong>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                  <span class="gift"><?php echo smartyTranslate(array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </strong>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-xs-2 text-xs-right">
        <div class="cart-line-product-actions ">
          <a
              class                       = "remove-from-cart"
              rel                         = "nofollow"
              href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-link-action            = "delete-from-cart"
              data-id-product             = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-product-attribute   = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-customization   	  = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
          >
            <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])||!$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <i class="material-icons pull-xs-left">delete</i>
            <?php }?>
          </a>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-totals.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194542864_92436841')) {function content_58343194542864_92436841($_smarty_tpl) {?>
<div class="cart-detailed-totals">

  <div class="card-block">
    <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['value']&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax') {?>
        <div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="label<?php if ('products'===$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
            <?php if ('products'==$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span>
          <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type']==='shipping') {?>
              <div><small class="value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl);?>
</small></div>
          <?php }?>
        </div>
      <?php }?>
    <?php } ?>
  </div>

  
    <?php /*  Call merged included template "checkout/_partials/cart-voucher.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '13532754995834319438a2f0-73280388');
content_58343194566323_51246879($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-voucher.tpl" */?>
  

  <hr>

  <div class="card-block">
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>

    <div class="cart-summary-line">
      <small class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</small>
      <small class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</small>
    </div>
  </div>

  <hr>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-voucher.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58343194566323_51246879')) {function content_58343194566323_51246879($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <div class="block-promo">
    <div class="cart-voucher">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
        <ul class="promo-name card-block">
          <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
            <li class="cart-summary-line">
              <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
              <div class="pull-xs-right">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

              </div>
            </li>
          <?php } ?>
        </ul>
      <?php }?>
      <p>
        <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
          <?php echo smartyTranslate(array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

        </a>
      </p>
      <div class="promo-code collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?> in<?php }?>" id="promo-code">
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
          <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
          <input type="hidden" name="addDiscount" value="1">
          <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo smartyTranslate(array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
">
          <button type="submit" class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span></button>
        </form>
        <div class="alert alert-danger js-error" role="alert">
          <i class="material-icons">&#xE001;</i><span class="m-l-1 js-error-text"></span>
        </div>
      </div>
      <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?>
        <p class="block-promo promo-highlighted">
          <?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

        </p>
        <ul class="js-discount card-block promo-discounts">
        <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
          <li class="cart-summary-line">
            <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
          </li>
        <?php } ?>
        </ul>
      <?php }?>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_583431945b2ff7_60037908')) {function content_583431945b2ff7_60037908($_smarty_tpl) {?>
<div class="checkout cart-detailed-actions card-block">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-xs-center">
      <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
    </div>
  <?php } else { ?>
    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

    </div>
  <?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:52
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5834319461fe23_64297066')) {function content_5834319461fe23_64297066($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p>
          <a class="_blank" href="http://www.prestashop.com" target="_blank">
            <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
