<?php
/* Smarty version 4.0.0, created on 2021-12-30 13:21:32
  from 'C:\laragon\www\zend_smarty\application\smarty\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61cd4feca28d42_88387625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaed6dddecc45a3aab1d0d9735e2da7e41435636' => 
    array (
      0 => 'C:\\laragon\\www\\zend_smarty\\application\\smarty\\templates\\index\\index.tpl',
      1 => 1640845291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cd4feca28d42_88387625 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
  <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>

</p>
<h1>LOGIN ADMIN</h1>

<form>
    <label for="fname">Account:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Password:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>

<?php }
}
