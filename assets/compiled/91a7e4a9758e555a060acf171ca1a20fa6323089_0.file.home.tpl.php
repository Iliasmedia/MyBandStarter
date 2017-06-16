<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:30:43
  from "D:\xampp\htdocs\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594415c34fab00_33137552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a7e4a9758e555a060acf171ca1a20fa6323089' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\home.tpl',
      1 => 1497631366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594415c34fab00_33137552 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="containerNews">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
	<div class="bigNews">
		<a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
news/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
assets/images/<?php echo $_smarty_tpl->tpl_vars['r']->value['image'];?>
?<?php echo $_smarty_tpl->tpl_vars['cacheCheck']->value;?>
" alt="" class="image"/>
		<span class="readMore">Lees meer >></span></a>
		<h2><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</h2>
		<p class="description"><?php echo $_smarty_tpl->tpl_vars['r']->value['shortitle'];?>
<br> <span class="date"><?php echo $_smarty_tpl->tpl_vars['r']->value['date_created'];?>
</span></p>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
</div>
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

	
</div>
<div class="call-outs-container">
	<div class="pagination">
	<p>Pagina <b><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</b></p>
		<?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
home/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Terug</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['pagenum']->value-1) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
home/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Verder</a>
		<?php }?>
		
	</div>
</div>



<?php }
}
