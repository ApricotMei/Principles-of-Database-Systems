<?php
/* Smarty version 3.1.32, created on 2018-05-10 07:32:35
  from 'D:\xampp\htdocs\jobs\templates\profile_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3d973e2af75_28551128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb8aa06351569c589523317e0889cee98e37839' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\profile_edit.tpl',
      1 => 1525872208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af3d973e2af75_28551128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177670045af3d973e11376_58967609', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5603995015af3d973e12bc7_28575048', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11754895305af3d973e29c34_13160991', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_1177670045af3d973e11376_58967609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1177670045af3d973e11376_58967609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profile<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_5603995015af3d973e12bc7_28575048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_5603995015af3d973e12bc7_28575048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="jumbotron">
				<h1>
					Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
				</h1>
				<p>
					You can modify your profile.
				</p>
			</div>

			<form role="form" id="profileform" action="profilesave.php" method="post">
<?php if ($_smarty_tpl->tpl_vars['type']->value == "Student") {?>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student name</label><input type="text" class="form-control" id="exampleInputEmail1" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['sname'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student GPA</label><input type="text" class="form-control" id="exampleInputPassword1" name="sGPA" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['sGPA'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student level</label><input type="text" class="form-control" id="exampleInputEmail1" name="slevel" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['slevel'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student university</label><input type="text" class="form-control" id="exampleInputPassword1" name="suniversity" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['suniversity'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student major</label><input type="text" class="form-control" id="exampleInputEmail1" name="smajor" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['smajor'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student description</label><input type="text" class="form-control" id="exampleInputPassword1" name="sdescription" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['sdescription'];?>
" />
				</div>
				<input type="submit" name="submit" value="Save" />
<?php } else { ?>
				<div class="form-group">
					 <label for="exampleInputEmail1">Company name</label><input type="text" class="form-control" id="exampleInputEmail1" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['cname'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Company industry</label><input type="text" class="form-control" id="exampleInputPassword1" name="cindustry" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['cindustry'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Company address</label><input type="text" class="form-control" id="exampleInputEmail1" name="caddress" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['caddress'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Company description</label><input type="text" class="form-control" id="exampleInputPassword1" name="cdescription" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['cdescription'];?>
" />
				</div>
				<input type="submit" name="submit" value="Save" />
<?php }?>
			</form>

<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_11754895305af3d973e29c34_13160991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_11754895305af3d973e29c34_13160991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
