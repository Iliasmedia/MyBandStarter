<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:30:43
  from "D:\xampp\htdocs\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594415c349a0e1_18727493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e514cd8b6fc2f171fee04fba9984f73fbe0add90' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\menu.tpl',
      1 => 1497633506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594415c349a0e1_18727493 (Smarty_Internal_Template $_smarty_tpl) {
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
