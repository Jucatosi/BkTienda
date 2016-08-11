<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 16:14:44
         compiled from "C:\wamp\www\Bktienda\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1974357ab52f4509803-30628196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a11c79cf8d31df56d103e3adedad2be26e3c5f2' => 
    array (
      0 => 'C:\\wamp\\www\\Bktienda\\admin\\themes\\default\\template\\content.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1974357ab52f4509803-30628196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab52f4597a50_75479750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab52f4597a50_75479750')) {function content_57ab52f4597a50_75479750($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
