<?php
/* Smarty version 3.1.32, created on 2018-05-10 07:32:21
  from 'D:\xampp\htdocs\jobs\templates\resume.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3d965e88997_79147119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e39ed12726a237fcc2525a0c90c1e336354d1e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\resume.tpl',
      1 => 1525872219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af3d965e88997_79147119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1322039605af3d965e74648_10759176', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14262022815af3d965e76138_60172618', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16373037965af3d965e87ef8_36117769', 'information');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_1322039605af3d965e74648_10759176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1322039605af3d965e74648_10759176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Resume<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_14262022815af3d965e76138_60172618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_14262022815af3d965e76138_60172618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form role="form" id="announceform" action="resume_edit.php" method="post">
			<div class="jumbotron">
				<h1>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['sname'];?>

				</h1>
				<h3>
					Student email:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['semail'];?>

				</p>
				<h3>
					Student GPA:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['sGPA'];?>

				</p>
				<h3>
					Student level:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['slevel'];?>

				</p>
				<h3>
					Student university:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['suniversity'];?>

				</p>
				<h3>
					Student major:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['smajor'];?>

				</p>
				<h3>
					Student description:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['sdescription'];?>

				</p>
				<h3>
					Apply position:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rposition'];?>

				</p>
				<h3>
					Student practice:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rpractice'];?>

				</p>
				<h3>
					Student project:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['rproject'];?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['type']->value == "Student") {?>
				<input type="submit" name="submit" value="Edit" />
				<?php } else { ?>
				<p></p>
				<?php }?>
			</div>
</form>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_16373037965af3d965e87ef8_36117769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_16373037965af3d965e87ef8_36117769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
