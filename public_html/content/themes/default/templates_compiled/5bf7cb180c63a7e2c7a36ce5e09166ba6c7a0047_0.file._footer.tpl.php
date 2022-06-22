<?php
/* Smarty version 3.1.40, created on 2022-06-02 07:27:47
  from '/Users/dataexpert/dev/sngine/Script/content/themes/default/templates/_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62986673dfc140_51162948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf7cb180c63a7e2c7a36ce5e09166ba6c7a0047' => 
    array (
      0 => '/Users/dataexpert/dev/sngine/Script/content/themes/default/templates/_footer.tpl',
      1 => 1643233226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
    'file:_footer.links.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
  ),
),false)) {
function content_62986673dfc140_51162948 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- ads -->
<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->tpl_vars['ads_master']->value['footer'],'_master'=>true), 0, false);
?>
<!-- ads -->

<?php if ($_smarty_tpl->tpl_vars['page']->value != "index") {
$_smarty_tpl->_subTemplateRender('file:_footer.links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome] -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/twemoji-amazing/twemoji-amazing.css">
<!-- Dependencies CSS [Twemoji-Awesome] -->

<!-- JS Files -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- JS Templates -->

<!-- Footer Custom JavaScript -->
<?php if ($_smarty_tpl->tpl_vars['system']->value['custome_js_footer']) {?>
	<?php echo '<script'; ?>
>
		<?php echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['custome_js_footer'],ENT_QUOTES);?>

	<?php echo '</script'; ?>
>
<?php }?>
<!-- Footer Custom JavaScript -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->tpl_vars['system']->value['analytics_code']) {
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<!-- Sounds -->
<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
	<!-- Notification -->
	<audio id="notification-sound" preload="auto">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
	</audio>
	<!-- Notification -->
	<!-- Chat -->
	<audio id="chat-sound" preload="auto">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
	</audio>
	<!-- Chat -->
	<!-- Call -->
	<audio id="chat-calling-sound" preload="auto" loop="true">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/calling.mp3" type="audio/mpeg">
	</audio>
	<!-- Call -->
	<!-- Video -->
	<audio id="chat-ringing-sound" preload="auto" loop="true">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/ringing.mp3" type="audio/mpeg">
	</audio>
	<!-- Video -->
<?php }?>
<!-- Sounds -->

</body>
</html><?php }
}
