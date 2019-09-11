<?php
/* Smarty version 3.1.32, created on 2018-05-10 18:55:52
  from 'D:\xampp\htdocs\jobs\templates\job.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af479986ab844_15628600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbe0cedc6172e8e74c3ef49ba6d7947c82cf80ec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\job.tpl',
      1 => 1525872011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af479986ab844_15628600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16371382545af479986a3a75_34036498', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2271469155af479986a4a47_36953179', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14077458685af479986aac04_29170480', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_16371382545af479986a3a75_34036498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16371382545af479986a3a75_34036498',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Issue a job<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_2271469155af479986a4a47_36953179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_2271469155af479986a4a47_36953179',
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
					You can Issue a job here.
				</p>
			</div>

			<form role="form" id="jobform" action="jobsave.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Job title</label><input type="text" class="form-control" id="exampleInputEmail1" name="title" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job location</label><input type="text" class="form-control" id="exampleInputPassword1" name="location" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Job salary</label><input type="text" class="form-control" id="exampleInputEmail1" name="salary" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job major</label><input type="text" class="form-control" id="exampleInputPassword1" name="major" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job level</label><input type="text" class="form-control" id="exampleInputPassword1" name="level" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Job description</label><input type="text" class="form-control" id="exampleInputEmail1" name="description" />
				</div>
				<input type="submit" name="submit" value="Save" />
			</form>

<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_14077458685af479986aac04_29170480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_14077458685af479986aac04_29170480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
