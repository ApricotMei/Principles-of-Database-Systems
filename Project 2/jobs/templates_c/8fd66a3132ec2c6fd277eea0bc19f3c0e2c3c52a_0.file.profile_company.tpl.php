<?php
/* Smarty version 3.1.32, created on 2018-05-09 15:25:18
  from 'D:\xampp\htdocs\jobs\templates\profile_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af2f6becdc6b6_86610007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd66a3132ec2c6fd277eea0bc19f3c0e2c3c52a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\profile_company.tpl',
      1 => 1525872177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af2f6becdc6b6_86610007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6032988595af2f6bebb8378_41428144', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17459511635af2f6bebbea45_79134842', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15833221225af2f6bebc9ef5_64885914', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_6032988595af2f6bebb8378_41428144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6032988595af2f6bebb8378_41428144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['arr1']->value['cname'];
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_17459511635af2f6bebbea45_79134842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_17459511635af2f6bebbea45_79134842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == "Student") {?>
<form role="form" id="announceform" action="followaction.php" method="post">
<?php } else { ?>
<form role="form" id="announceform" action="profile_edit.php" method="post">
<?php }?>
			<div class="jumbotron">
				<h1>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['cname'];?>

				</h1>
				<h3>
					Company email:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['cemail'];?>

				</p>
				<h3>
					Company industry:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['cindustry'];?>

				</p>
				<h3>
					Company address:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['caddress'];?>

				</p>
				<h3>
					Company description:
				</h3>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['arr1']->value['cdescription'];?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['type']->value == "Student") {?>
				<?php if ($_smarty_tpl->tpl_vars['arr1']->value['status'] == "Followed") {?>
				<h2>
					You have followed this company.
				</h2>
				<?php } else { ?>
				<input type="text" style = "display:none" name="cemail" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['cemail'];?>
" />
				<input type="submit" name="submit" value="Follow" />
				<?php }?>
				<?php } else { ?>
				<input type="submit" name="submit" value="Edit" />
				<p></p>
				<?php }?>
			</div>
</form>
<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_15833221225af2f6bebc9ef5_64885914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_15833221225af2f6bebc9ef5_64885914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'announce');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announce']->value) {
if ($_smarty_tpl->tpl_vars['type']->value == "Student") {?>
<form role="form" id="announceform" action="jobview_student.php" method="post">
<?php } else { ?>
<form role="form" id="announceform" action="jobview_company.php" method="post">
<?php }?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</div>
<?php
}
}
/* {/block 'information'} */
}
