<?php
/* Smarty version 3.1.30, created on 2017-06-16 19:33:29
  from "D:\xampp\htdocs\views\includes\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59441669098c05_61765373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9071579584e3f90d055473ab1c685ec2a3fc36e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\views\\includes\\footer.tpl',
      1 => 1497634304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59441669098c05_61765373 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</main>
	<footer>
		<div class="wrapper">
		<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

		</div>
	</footer>
	<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.9.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['siteLink']->value;?>
assets/js/functions.js?<?php echo $_smarty_tpl->tpl_vars['cacheCheck']->value;?>
"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
