<?php
/* Smarty version 3.1.32, created on 2018-05-07 12:26:16
  from 'D:\xampp\htdocs\jobs\templates\signin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af029c83c3c96_35099521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38431edf4f72f86601319aee117f898d4706c7eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\signin.tpl',
      1 => 1525655669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af029c83c3c96_35099521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7852042685af029c83ba2f5_16463115', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16998423555af029c83be3b0_01370984', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19277830295af029c83c1a40_33432344', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_7852042685af029c83ba2f5_16463115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7852042685af029c83ba2f5_16463115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sign in<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_16998423555af029c83be3b0_01370984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_16998423555af029c83be3b0_01370984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					Please input your email address and password.
				</p>
			</div>

			<form role="form" id="loginform" action="signinaction.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" name="email" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" name="password" />
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" id="userType" name="type" value="stu" />I'm a student</label>
				</div> <input type="submit" name="submit" value="Signin" />
			</form>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_19277830295af029c83c1a40_33432344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_19277830295af029c83c1a40_33432344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
