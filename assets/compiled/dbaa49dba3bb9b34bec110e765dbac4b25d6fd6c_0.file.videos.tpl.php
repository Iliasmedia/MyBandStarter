<?php
/* Smarty version 3.1.30, created on 2017-06-17 19:17:04
  from "D:\xampp\htdocs\views\videos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5945641075cba0_93912333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbaa49dba3bb9b34bec110e765dbac4b25d6fd6c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\videos.tpl',
      1 => 1497719822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5945641075cba0_93912333 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" style="overflow-x:auto;">
	<table class="gridtable">
		<tr>
    <th>Video</th> 
    <th>Titel</th> 
    <th>Weergaven</th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topvideos']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
  <tr>
    <td><iframe width="250" height="150" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['r']->value['link'];?>
" frameborder="0" allowfullscreen></iframe></td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['title'];?>
</td> 
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value['views'];?>
</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
</div>

<?php }
}
