<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:38:20
  from "D:\xampp\htdocs\views\ajax\pages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944178c6f0556_45947471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8506edf3e3ab2910c719dc0b8aed0bf506a63116' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\ajax\\pages.tpl',
      1 => 1497634555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944178c6f0556_45947471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="call-outs-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
	<div class="call-out">
		<a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
news/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
assets/images/<?php echo $_smarty_tpl->tpl_vars['r']->value['image'];?>
?<?php echo $_smarty_tpl->tpl_vars['cacheCheck']->value;?>
" alt="" class="imagesmall"/>
		<span class="readMoresmall">Lees meer >></span></a>
		<h4 class="description"><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h4>
		<p class="description"><?php echo $_smarty_tpl->tpl_vars['r']->value['shortitle'];?>
<br><span class="date"><?php echo $_smarty_tpl->tpl_vars['r']->value['date_created'];?>
</span></p>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
