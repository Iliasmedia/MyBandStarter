<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:33:42
  from "D:\xampp\htdocs\views\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594416762eb405_65919897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b231947afe3a3a757ee6a151d73de0d641804a7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\news.tpl',
      1 => 1497630661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594416762eb405_65919897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsinfo']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
	<div class="bigNews">
		<img src="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
assets/images/<?php echo $_smarty_tpl->tpl_vars['r']->value['image'];?>
?<?php echo $_smarty_tpl->tpl_vars['cacheCheck']->value;?>
" alt="" class="image"/>
		<h2><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h2>
		<p class="description"><i><?php echo $_smarty_tpl->tpl_vars['r']->value['shortitle'];?>
</i><br><br> <?php echo $_smarty_tpl->tpl_vars['r']->value['content'];?>
 <br><span class="date"><?php echo $_smarty_tpl->tpl_vars['r']->value['date_created'];?>
</span></p>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>

<?php }
}
