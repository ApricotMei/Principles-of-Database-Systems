<?php
/* Smarty version 3.1.32, created on 2018-05-10 18:38:11
  from 'D:\xampp\htdocs\jobs\templates\jobview_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af475731ba7b1_49386127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea82caf915b1c4c0404296b7793d48d9b0af72b1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\jobview_company.tpl',
      1 => 1525872083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af475731ba7b1_49386127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9540543325af475730959f2_57927141', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7556315475af475730d71e9_88498979', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15899018575af475730deff4_62187265', "information");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_9540543325af475730959f2_57927141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9540543325af475730959f2_57927141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['arr']->value['jobtitle'];
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_7556315475af475730d71e9_88498979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_7556315475af475730d71e9_88498979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
			</div>
<?php
}
}
/* {/block 'summary'} */
/* {block "information"} */
class Block_15899018575af475730deff4_62187265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_15899018575af475730deff4_62187265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'student');
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
					<input type="text" style="display:none" name="announceid" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['aid'];?>
" />
					<input type="text" style="display:none" name="stuemail" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['semail'];?>
" />
					<?php if ($_smarty_tpl->tpl_vars['student']->value['applystatus'] == "Unanswered") {?>
					<input type="submit" name="submit" value="Accept" />
					<input type="submit" name="submit" value="Decline" />
					<?php } elseif ($_smarty_tpl->tpl_vars['student']->value['applystatus'] == "Accepted") {?>
					<h4>
						Has been accepted.
					</h4>
					<?php } else { ?>
					<h4>
						Has been declined.
					</h4>
					<?php }?>
					<p></p>
					<input type="submit" name="submit" value="More details about the student." />
				</div>  
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "information"} */
}
