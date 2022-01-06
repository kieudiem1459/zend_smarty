<?php
/* Smarty version 4.0.0, created on 2022-01-05 10:15:56
  from 'C:\laragon\www\zend_smarty\application\smarty\templates\static\menu_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61d50d6c70b701_53451736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb886aed66ef6f2cf1a13b3e3a66743f2864b5cc' => 
    array (
      0 => 'C:\\laragon\\www\\zend_smarty\\application\\smarty\\templates\\static\\menu_admin.tpl',
      1 => 1641267775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d50d6c70b701_53451736 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Sidebar -->
<nav id="sidebar">
    <ul class="list-unstyled components">
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'index'));?>
">MENU</a></p>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Đơn Hàng</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a onclick="listOrder(1)" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'order'));?>
">Chưa
                        xác nhận</a>
                </li>
                <li>
                    <a onclick="listOrder(2)" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'order'));?>
">Đã xác
                        nhận</a>
                </li>
                <li>
                    <a onclick="listOrder(3)" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'order'));?>
">Đã
                        hủy</a>
                </li>
                <li>
                    <a onclick="listOrder(4)" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'order'));?>
">Hoàn
                        tất</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sản
                phẩm</a>
            <ul class="collapse list-unstyled" id="productSubmenu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'product','action'=>'add'));?>
">Thêm sản phẩm</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'product'));?>
">Danh sách sản phẩm</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Danh mục</a>
            <ul class="collapse list-unstyled" id="categorySubmenu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'category','action'=>'add'));?>
">Thêm danh mục</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'category'));?>
">Danh sách danh mục</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#brandSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Thương hiệu</a>
            <ul class="collapse list-unstyled" id="brandSubmenu">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'brand','action'=>'add'));?>
">Thêm thương hiệu</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'brand'));?>
">Danh sách thương hiệu</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->url(array('controller'=>'admin','action'=>'customer'));?>
">Danh sách khách hàng</a>
        </li>
    </ul>

</nav>

<?php echo '<script'; ?>
>
    function listOrder(type) {
        switch (type) {
            case 1:
                <?php $_smarty_tpl->_assignInScope('type_list', 1);?>;
                break;
            case 2:
                <?php $_smarty_tpl->_assignInScope('type_list', 2);?>;
                break;
            case 3:
                <?php $_smarty_tpl->_assignInScope('type_list', 3);?>;
                break;
            default:
                <?php $_smarty_tpl->_assignInScope('type_list', 4);?>;
        }
    }
<?php echo '</script'; ?>
><?php }
}
