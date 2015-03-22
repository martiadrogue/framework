<?php /* Smarty version 3.1.22-dev/15, created on 2015-03-22 02:17:11
         compiled from "../view/test/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1638818889550e181794bac9_40679144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a4de8c8211e39bf2742e3b8819b1a56df888200' => 
    array (
      0 => '../view/test/index.tpl',
      1 => 1426987007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1638818889550e181794bac9_40679144',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/15',
  'unifunc' => 'content_550e1817a5f568_81598545',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550e1817a5f568_81598545')) {
function content_550e1817a5f568_81598545 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1638818889550e181794bac9_40679144';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/normalize.min.css" />
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 - Framework MVC</title>
    <style type="text/css">
        .important { color: #336699; }
    </style>
</head>
<body>
  <div id="content">
    <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
    <p class="important">
      Hello <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
, with Smarty!
    </p>
  </div>
  <div id="footer">
      <p>&copy; Copyright 2015 by <a href="mailto://marti.adrogue@gmail.com">martí adrogué</a>.</p>
  </div>
</body>
</html>
<?php }
}
?>