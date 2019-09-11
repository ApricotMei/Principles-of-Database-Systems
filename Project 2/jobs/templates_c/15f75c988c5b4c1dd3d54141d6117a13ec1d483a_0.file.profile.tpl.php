<?php
/* Smarty version 3.1.32, created on 2018-05-10 07:32:19
  from 'D:\xampp\htdocs\jobs\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3d9635725c6_46828328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15f75c988c5b4c1dd3d54141d6117a13ec1d483a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\profile.tpl',
      1 => 1525872130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af3d9635725c6_46828328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6914056435af3d9635626f4_84971980', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19420854775af3d9635679d1_08140217', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17349535285af3d963571786_49000671', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_6914056435af3d9635626f4_84971980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6914056435af3d9635626f4_84971980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['arr']->value['sname'];
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_19420854775af3d9635679d1_08140217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_19420854775af3d9635679d1_08140217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form role="form" id="announceform" action="profile_edit.php" method="post">
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
class Block_17349535285af3d963571786_49000671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_17349535285af3d963571786_49000671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
