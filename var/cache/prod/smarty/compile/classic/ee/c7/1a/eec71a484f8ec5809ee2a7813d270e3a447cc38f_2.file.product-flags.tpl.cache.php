<?php
/* Smarty version 3.1.43, created on 2024-05-17 23:26:23
  from 'C:\xampp\htdocs\my_store\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6647cb7f413e00_61785115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec71a484f8ec5809ee2a7813d270e3a447cc38f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_store\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6647cb7f413e00_61785115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '16129012806647cb7f411b62_74617058';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13210232106647cb7f4129f0_80455002', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_13210232106647cb7f4129f0_80455002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_13210232106647cb7f4129f0_80455002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
