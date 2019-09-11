<?php
/* Smarty version 3.1.32, created on 2018-05-09 15:25:16
  from 'D:\xampp\htdocs\jobs\templates\jobview_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af2f6bc4156e7_77109258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07acb1ca8b51c2b1bf6f30fdee06acca40a742f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\jobview_student.tpl',
      1 => 1525872099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af2f6bc4156e7_77109258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489310485af2f6bc387df4_34132135', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3340364345af2f6bc38e082_18130822', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4178588805af2f6bc414ca4_83772275', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_489310485af2f6bc387df4_34132135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_489310485af2f6bc387df4_34132135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['arr']->value['jobtitle'];
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_3340364345af2f6bc38e082_18130822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_3340364345af2f6bc38e082_18130822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form role="form" id="announceform" action="jobaction_student.php" method="post">
			<div class="jumbotron">
				<h1>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['jobtitle'];?>

				</h1>
				<h3>
					Job location:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['joblocation'];?>

				</p>
				<h3>
					Company:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['company'];?>

				</p>
				<h3>
					Job salary:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['jobsalary'];?>

				</p>
				<h3>
					Job major:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['jobmajor'];?>

				</p>
				<h3>
					Job level:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['joblevel'];?>

				</p>
				<h3>
					Job description:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['jobdescription'];?>

				</p>
				<h3>
					Job announcedate:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr']->value['announcedate'];?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['arr']->value['status'] == "Noapply") {?>
				<input type="submit" name="submit" value="Apply <?php echo $_smarty_tpl->tpl_vars['arr']->value['aid'];?>
" />
				<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['status'] == "Accepted") {?>
				<h4>
					Your apply has been accepted.
				</h4>
				<?php } elseif ($_smarty_tpl->tpl_vars['arr']->value['status'] == "Declined") {?>
				<h4>
					Your apply has been accepted.
				</h4>
				<?php } else { ?>
				<h4>
					Your apply has not been answered.
				</h4>
				<?php }?>
				<input type="submit" name="submit" value="See more information about <?php echo $_smarty_tpl->tpl_vars['arr']->value['cemail'];?>
" />
			</div>
</form>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_4178588805af2f6bc414ca4_83772275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_4178588805af2f6bc414ca4_83772275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
