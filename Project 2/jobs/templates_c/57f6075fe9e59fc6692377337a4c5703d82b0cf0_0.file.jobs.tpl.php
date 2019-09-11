<?php
/* Smarty version 3.1.32, created on 2018-05-07 13:10:58
  from 'D:\xampp\htdocs\jobs\templates\jobs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af03442692b65_16190719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f6075fe9e59fc6692377337a4c5703d82b0cf0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\jobs.tpl',
      1 => 1525691456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af03442692b65_16190719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4461805155af0344268c521_84793616', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16946375425af0344268d680_02742325', 'summary');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19378608345af03442692353_93393505', 'information');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "_base_.tpl");
}
/* {block "title"} */
class Block_4461805155af0344268c521_84793616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4461805155af0344268c521_84793616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profile<?php
}
}
/* {/block "title"} */
/* {block 'summary'} */
class Block_16946375425af0344268d680_02742325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_16946375425af0344268d680_02742325',
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
					Your jobs is as follows.
				</p>
			</div>

			<div class="list-group">
				 <a href="#" class="list-group-item active">Home</a>
				<div class="list-group-item">
					
				</div>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						List group item heading
					</h4>
					<p class="list-group-item-text">
						...
					</p>
				</div>
				<div class="list-group-item">
					 <span class="badge">14</span> Help
				</div> <a class="list-group-item active"> <span class="badge">14</span> Help</a>
			</div><button type="button" class="btn btn-default btn-block btn-warning active" onclick="javascript:top.location='job.php';">Issue a new job</button>

<?php
}
}
/* {/block 'summary'} */
/* {block 'information'} */
class Block_19378608345af03442692353_93393505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_19378608345af03442692353_93393505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'information'} */
}
