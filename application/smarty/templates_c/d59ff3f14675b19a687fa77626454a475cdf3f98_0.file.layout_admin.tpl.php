<?php
/* Smarty version 4.0.0, created on 2021-12-31 17:04:02
  from 'C:\laragon\www\zend_smarty\application\smarty\templates\layout_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61ced592216f83_50965014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd59ff3f14675b19a687fa77626454a475cdf3f98' => 
    array (
      0 => 'C:\\laragon\\www\\zend_smarty\\application\\smarty\\templates\\layout_admin.tpl',
      1 => 1640925685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_admin.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_61ced592216f83_50965014 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Index page</title>
</head>
<body>

<link rel="stylesheet" type="text/css" href="../../asset/admin/css/admin_login.css"/>
<link rel="stylesheet" type="text/css" href="../../asset/common/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../../asset/common/bootstrap/css/bootstrap-grid.css"/>
<link rel="stylesheet" type="text/css" href="../../asset/common/dataTable/jquery.dataTables.min.css"/>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="../../asset/common/bootstrap/js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../../asset/common/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="../../asset/common/dataTable/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

<div id="header">
    <?php $_smarty_tpl->_subTemplateRender("file:header_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div>
    <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="container">
    <?php echo ($_smarty_tpl->tpl_vars['this']->value->layout()->content);?>

</div>

<div id="footer">
    <?php $_smarty_tpl->_subTemplateRender("file:footer_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

</body>
</html><?php }
}
