<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 12:52:15
         compiled from "/Applications/MAMP/htdocs/staraddons/themes/classic/templates/catalog/_partials/active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7561654885834316fe15ee2-05810897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9507f33f37c208612a7bcd9a21cef5ac0bb1cde4' => 
    array (
      0 => '/Applications/MAMP/htdocs/staraddons/themes/classic/templates/catalog/_partials/active_filters.tpl',
      1 => 1479814380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7561654885834316fe15ee2-05810897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5834316fe304f6_97584925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834316fe304f6_97584925')) {function content_5834316fe304f6_97584925($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
  <section id="js-active-search-filters" class="active_filters">
    <h1 class="h6 active-filter-title"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h1>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        <li class="filter-block"><?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
 <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a></li>
      <?php } ?>
    </ul>
  </section>
<?php }?>
<?php }} ?>
