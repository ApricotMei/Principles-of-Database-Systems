<?php
/* Smarty version 3.1.32, created on 2018-05-07 06:26:21
  from 'D:\xampp\htdocs\jobs\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aefd56d1707d7_79285925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e181308b11bbe0e5b71d46258daf256754a9bb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\signup.tpl',
      1 => 1525667057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aefd56d1707d7_79285925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490254935aefd56d16dbf5_88469548', "title");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17470839615aefd56d16f255_22684471', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10371754255aefd56d16ffc1_93427179', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_1490254935aefd56d16dbf5_88469548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1490254935aefd56d16dbf5_88469548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sign up<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_17470839615aefd56d16f255_22684471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_17470839615aefd56d16f255_22684471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					Please input a email address and a password to create an account.
				</p>
			</div>

			<form role="form" id="signupform" action="signupaction.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" name="email" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" name="password" />
				</div>
				<div class="form-group">
					 <label for="exampleInputUsername1">Username</label><input type="text" class="form-control" id="exampleInputUsername1" name="username" />
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" id="userType" name="type" value="stu" />I'm a student</label>
				</div> <input type="submit" name="submit" value="Signup" />
			</form>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_10371754255aefd56d16ffc1_93427179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_10371754255aefd56d16ffc1_93427179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
