<?php
/* Smarty version 3.1.43, created on 2024-05-18 12:52:36
  from 'C:\xampp\htdocs\my_store\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6648887452e1f7_98626519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e576e44980e939824132e547514b8e02eee58a39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_store\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1644851494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6648887452e1f7_98626519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
