<?php /* Smarty version 3.1.22-dev/15, created on 2015-03-22 09:28:15
         compiled from "../view/test/list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1219620431550e7d1fa5a7c4_81374758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a8666e56d556fc463e497a4905fc4b02e10bd7' => 
    array (
      0 => '../view/test/list.tpl',
      1 => 1426987104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219620431550e7d1fa5a7c4_81374758',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/15',
  'unifunc' => 'content_550e7d202c58c8_20048919',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550e7d202c58c8_20048919')) {
function content_550e7d202c58c8_20048919 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1219620431550e7d1fa5a7c4_81374758';
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