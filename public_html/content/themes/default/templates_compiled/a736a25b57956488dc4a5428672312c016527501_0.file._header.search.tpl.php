<?php
/* Smarty version 3.1.40, created on 2022-06-02 14:28:25
  from '/var/www/html/content/themes/default/templates/_header.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6298c909cb6e11_70496134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a736a25b57956488dc4a5428672312c016527501' => 
    array (
      0 => '/var/www/html/content/themes/default/templates/_header.search.tpl',
      1 => 1638116302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.search.tpl' => 1,
  ),
),false)) {
function content_6298c909cb6e11_70496134 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-wrapper d-none d-md-block">
    <form>
        <div class="search-input-icon">
            <i class="fa fa-search"></i>
        </div>
        <input id="search-input" type="text" class="form-control" placeholder='<?php echo __("Search");?>
' autocomplete="off">
        <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
            <div class="dropdown-widget-header">
                <span class="title"><?php echo __("Search Results");?>
</span>
            </div>
            <div class="dropdown-widget-body">
                <div class="loader loader_small ptb10"></div>
            </div>
            <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['search_log']) {?>
            <div id="search-history" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
                <div class="dropdown-widget-header">
                    <span class="text-link float-right js_clear-searches">
                        <?php echo __("Clear");?>

                    </span>
                    <span class="title"><i class="fa fa-clock mr5"></i><?php echo __("Recent Searches");?>
</span>
                </div>
                <div class="dropdown-widget-body">
                    <?php $_smarty_tpl->_subTemplateRender('file:ajax.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('results'=>$_smarty_tpl->tpl_vars['user']->value->_data['search_log']), 0, false);
?>
                </div>
                <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("Advanced Search");?>
</a>
            </div>
        <?php }?>
    </form>
</div><?php }
}
