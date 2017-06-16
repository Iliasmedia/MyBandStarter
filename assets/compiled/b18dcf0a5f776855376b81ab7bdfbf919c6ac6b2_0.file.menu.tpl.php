<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:33:29
  from "D:\xampp\htdocs\views\includes\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944166904a252_06362819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b18dcf0a5f776855376b81ab7bdfbf919c6ac6b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\includes\\menu.tpl',
      1 => 1497633506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944166904a252_06362819 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<nav>
	<label for="toggle">&#9776;</label>
	 <input type="checkbox" id="toggle"/>
		<ul class="menu">
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
home" <?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?>class="active" <?php }?>>Home</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
about" <?php if ($_smarty_tpl->tpl_vars['active']->value == 'about') {?>class="active" <?php }?>>Over RiceGum</a></li>
		  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
contact" <?php if ($_smarty_tpl->tpl_vars['active']->value == 'contact') {?>class="active" <?php }?>>Contact</a></li>
		</ul>
	</nav>
	<main class="Site-content">
<?php }
}
