<?php
/* Smarty version 3.1.40, created on 2022-06-02 16:59:19
  from '/var/www/html/content/themes/default/templates/_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6298ec67937c26_78464803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8181723ba1f1cc74b0d13c34625482d8ab4788' => 
    array (
      0 => '/var/www/html/content/themes/default/templates/_pinned_post.tpl',
      1 => 1638116302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_6298ec67937c26_78464803 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
    <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
