<?php
/* Smarty version 3.1.32, created on 2018-05-10 18:50:59
  from 'D:\xampp\htdocs\jobs\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af4787315fea9_18250510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0beca66c5db37b2e45ba9e993ca804397a2f5ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\search.tpl',
      1 => 1525970998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4787315fea9_18250510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4413189185af478731404d4_47823386', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17861163035af47873141475_79497867', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14541187255af47873141fa6_41915932', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_4413189185af478731404d4_47823386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4413189185af478731404d4_47823386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Search<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_17861163035af47873141475_79497867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_17861163035af47873141475_79497867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					The search results are as follows.
				</p>
			</div>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_14541187255af47873141fa6_41915932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_14541187255af47873141fa6_41915932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
<?php if ($_smarty_tpl->tpl_vars['type']->value == "Company") {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
<form role="form" id="announceform" action="jobaction_company.php" method="post">
				<div class="col-md-4 column">
					<h2>
						<?php echo $_smarty_tpl->tpl_vars['student']->value['sname'];?>

					</h2>
					<h4>
						Student GPA:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['student']->value['sGPA'];?>

					</p>
					<h4>
						Student level:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['student']->value['slevel'];?>

					</p>
					<h4>
						Student university:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['student']->value['suniversity'];?>

					</p>
					<h4>
						Student major:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['student']->value['smajor'];?>

					</p>
					<input type="text" style="display:none" name="stuemail" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['semail'];?>
" />
					<input type="submit" name="submit" value="More details about the student." />
				</div>  
</form>   
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr3']->value, 'announce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announce']->value) {
?>
<form role="form" id="announceform" action="jobview_student.php" method="post">
				<div class="col-md-4 column">
					<h2>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobtitle'];?>

					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['joblocation'];?>

					</p>
					<h4>
						Company:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['company'];?>

					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobsalary'];?>

					</p>
					<h4>
						Job major:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobmajor'];?>

					</p>
					<input type="submit" name="submit" value="More details about <?php echo $_smarty_tpl->tpl_vars['announce']->value['aid'];?>
" />
				</div>  
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'announce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announce']->value) {
?>
<form role="form" id="announceform" action="jobview_student.php" method="post">
				<div class="col-md-4 column">
					<h2>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobtitle'];?>

					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['joblocation'];?>

					</p>
					<h4>
						Company:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['company'];?>

					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobsalary'];?>

					</p>
					<h4>
						Job major:
					</h4>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['announce']->value['jobmajor'];?>

					</p>
					<input type="submit" name="submit" value="More details about <?php echo $_smarty_tpl->tpl_vars['announce']->value['aid'];?>
" />
				</div>  
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>

<?php
}
}
/* {/block 'information'} */
}
