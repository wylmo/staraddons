<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:14:54
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/adminDzSayajin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37976950958340c8ec1be30-56109462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a0ad4983fc2cd381c1d8cc617b770308326bb6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/adminDzSayajin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1479805141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37976950958340c8ec1be30-56109462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340c8ec21cb7_80473075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340c8ec21cb7_80473075')) {function content_58340c8ec21cb7_80473075($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
