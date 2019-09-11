<?php
/* Smarty version 3.1.32, created on 2018-05-08 22:09:33
  from 'D:\xampp\htdocs\jobs\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af203fd1b00a9_02433173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b19a2dc9b70857153b7b3746833105bb7fe89d78' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\index.tpl',
      1 => 1525809428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af203fd1b00a9_02433173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13720374805af203fd185c49_19690059', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21446120135af203fd186bd6_58292677', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11144390845af203fd195f08_65298448', 'information');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_13720374805af203fd185c49_19690059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13720374805af203fd185c49_19690059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Index<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_21446120135af203fd186bd6_58292677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_21446120135af203fd186bd6_58292677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['name']->value == "NONE") {?>
			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					This is a new social networking site called Jobster that focuses on graduating students looking for jobs and complanies looking for employees. Click the button below to get an account first.
				</p>
				<p>
					 <a class="btn btn-primary btn-large" href="signup.php">Sign up</a>
				</p>
			</div>

<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "Company") {?>
			<div class="jumbotron">
				<h1>
					Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
				</h1>
				<p>
					Welcome to the jobs system, all the announcements you post is below.
				</p>	
			</div>

<?php } else { ?>
			<div class="jumbotron">
				<h1>
					Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
				</h1>
				<p>
					Welcome to the jobs system, here are some announcements you might be interested in.
				</p>	
			</div>

<?php }?>

<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_11144390845af203fd195f08_65298448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_11144390845af203fd195f08_65298448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
<?php if ($_smarty_tpl->tpl_vars['name']->value == "NONE") {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'announce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announce']->value) {
?>
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
					<p>
						 <a class="btn" href="signin.php">View details »</a>
					</p>
				</div>  
   
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "Company") {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr4']->value, 'announce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announce']->value) {
?>
<form role="form" id="announceform" action="jobview_company.php" method="post">
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
} else {
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
