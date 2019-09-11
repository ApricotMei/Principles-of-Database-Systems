<?php
/* Smarty version 3.1.32, created on 2018-05-10 07:32:27
  from 'D:\xampp\htdocs\jobs\templates\resume_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3d96beeab55_57908159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9966d9e0c32c4d84e16928ab4bc7167b1e8b205d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\resume_edit.tpl',
      1 => 1525872277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af3d96beeab55_57908159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2480488085af3d96bedfe16_13372331', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19656088375af3d96bee0fa4_62139202', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2079816835af3d96beea331_72420268', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_2480488085af3d96bedfe16_13372331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2480488085af3d96bedfe16_13372331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edit Resume<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_19656088375af3d96bee0fa4_62139202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_19656088375af3d96bee0fa4_62139202',
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
					You can modify your resume.
				</p>
			</div>

			<form role="form" id="resumeform" action="resumesave.php" method="post">
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
				<div class="form-group">
					 <label for="exampleInputPassword1">Apply position</label><input type="text" class="form-control" id="exampleInputPassword1" name="rposition" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rposition'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student practice</label><input type="text" class="form-control" id="exampleInputEmail1" name="rpractice" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rpractice'];?>
" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student project</label><input type="text" class="form-control" id="exampleInputPassword1" name="rproject" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rproject'];?>
" />
				</div>
				<input type="submit" name="submit" value="Save" />
			</form>

<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_2079816835af3d96beea331_72420268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_2079816835af3d96beea331_72420268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
