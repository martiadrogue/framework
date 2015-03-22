<?php /* Smarty version 3.1.22-dev/15, created on 2015-03-22 23:35:12
         compiled from "../view/test/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2003735517550f43a0988151_94557466%%*/
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
  'nocache_hash' => '2003735517550f43a0988151_94557466',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/15',
  'unifunc' => 'content_550f43a137c703_87818331',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_550f43a137c703_87818331')) {
function content_550f43a137c703_87818331 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2003735517550f43a0988151_94557466';
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