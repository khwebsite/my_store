<?php
/* Smarty version 3.1.43, created on 2024-05-18 12:50:50
  from 'C:\xampp\htdocs\my_store\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6648880ab14065_75669873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7847e23a097fe1882931345ac1611c8e3eafb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\my_store\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1658334665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6648880ab14065_75669873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\my_store\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\5b\\78\\47\\5b7847e23a097fe1882931345ac1611c8e3eafb3_2.file.helpers.tpl.php',
    'uid' => '5b7847e23a097fe1882931345ac1611c8e3eafb3',
    'call_name' => 'smarty_template_function_renderLogo_14161793586648880ab0cec3_97216638',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14161793586648880ab0cec3_97216638 */
if (!function_exists('smarty_template_function_renderLogo_14161793586648880ab0cec3_97216638')) {
function smarty_template_function_renderLogo_14161793586648880ab0cec3_97216638(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_14161793586648880ab0cec3_97216638 */
}
