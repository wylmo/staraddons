<?php /* Smarty version Smarty-3.1.19, created on 2016-11-22 10:11:26
         compiled from "/Applications/MAMP/htdocs/prestashop_1.7.0.0/admin856es4ce7/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23852126558340bbe5b38a6-04833935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a8c66e3a7c73ae9aa076c94bee5e8c7c729928' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.0.0/admin856es4ce7/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1479805141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23852126558340bbe5b38a6-04833935',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340bbe5b7627_20908495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340bbe5b7627_20908495')) {function content_58340bbe5b7627_20908495($_smarty_tpl) {?>
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
