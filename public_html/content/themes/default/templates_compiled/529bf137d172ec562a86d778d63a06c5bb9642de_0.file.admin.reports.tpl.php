<?php
/* Smarty version 3.1.40, created on 2022-06-02 16:38:24
  from '/var/www/html/content/themes/default/templates/admin.reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6298e780c4ff25_57059459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529bf137d172ec562a86d778d63a06c5bb9642de' => 
    array (
      0 => '/var/www/html/content/themes/default/templates/admin.reports.tpl',
      1 => 1638116302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6298e780c4ff25_57059459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/includes/libs/Smarty/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'/var/www/html/includes/libs/Smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="card">
    <div class="card-header with-icon">
        <div class="float-right">
            <button type="button" class="btn btn-sm btn-danger js_admin-deleter" data-handle="reports">
                <i class="fa fa-check"></i><span class="ml5 d-none d-lg-inline-block"><?php echo __("Mark All As Safe");?>
</span>
            </button>
        </div>
        <i class="fa fa-exclamation-triangle mr10"></i><?php echo __("Reports");?>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover js_dataTable">
                <thead>
                    <tr>
                        <th><?php echo __("ID");?>
</th>
                        <th><?php echo __("Node");?>
</th>
                        <th><?php echo __("Type");?>
</th>
                        <th><?php echo __("Reporter By");?>
</th>
                        <th><?php echo __("Time");?>
</th>
                        <th><?php echo __("Actions");?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "user") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_picture'];?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['node']['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['node']['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['user_lastname'];
}?>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "page") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['page_title'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "group") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_name'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['group_title'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "event") {?>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['event_picture'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['node']['event_title'];?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "post") {?>
                                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" target="_blank">
                                        <i class="fa fa-eye mr5"></i><?php echo __("View Post");?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "comment") {?>
                                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                                        <i class="fa fa-eye mr5"></i><?php echo __("View Comment");?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "forum_thread") {?>
                                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                                        <i class="fa fa-eye mr5"></i><?php echo __("View Thread");?>

                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "forum_reply") {?>
                                    <a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank">
                                        <i class="fa fa-eye mr5"></i><?php echo __("View Reply");?>

                                    </a>
                                <?php }?>
                            </td>
                            <td>
                                <span class="badge badge-lg badge-<?php echo $_smarty_tpl->tpl_vars['row']->value['node']['color'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['row']->value['node']['name']);?>
</span>
                            </td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['row']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];
}?>
                                </a>
                            </td>

                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "user") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "page") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "group") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/groups/edit_group/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "event") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['control_panel']->value['url'];?>
/events/edit_event/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "forum_thread") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/edit-thread/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['node_type'] == "forum_reply") {?>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/edit-reply/<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" class="btn btn-sm btn-icon btn-rounded btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                <?php }?>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Mark as Safe");?>
' class="btn btn-sm btn-icon btn-rounded btn-success js_admin-deleter" data-handle="report" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-sm btn-icon btn-rounded btn-danger js_admin-deleter" data-handle="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['node_id'];?>
" data-node="<?php echo $_smarty_tpl->tpl_vars['row']->value['report_id'];?>
">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
