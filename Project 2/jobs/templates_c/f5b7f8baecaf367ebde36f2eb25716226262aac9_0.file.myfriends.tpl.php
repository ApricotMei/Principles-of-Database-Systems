<?php
/* Smarty version 3.1.32, created on 2018-05-10 21:19:03
  from 'D:\xampp\htdocs\jobs\templates\myfriends.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af49b277a07a2_48543577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b7f8baecaf367ebde36f2eb25716226262aac9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\myfriends.tpl',
      1 => 1525979227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af49b277a07a2_48543577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
   <head>
      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18450345245af49b27786466_71838677', "title");
?>
Friend--Jobs</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
         <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
      <![endif]-->
      <?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Jobs</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search" id="searchform" action="searchfriend.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="keyword" />
						</div> <input type="submit" name="submit" value="Search" />
					</form>

					<ul class="nav navbar-nav navbar-right">
						
						<li>
							 <a href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
						</li>
						<li>
							 <a href="logout.php">Log out</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">My account<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="profile.php">Profile</a>
								</li>
								<li>
									 <a href="resume.php">Resume</a>
								</li>
								<li>
									 <a href="friend.php">Add a friend</a>
								</li>
								<li>
									 <a href="myfriends.php">My friends</a>
								</li>
							</ul>
						</li>
					</ul>

				</div>
				
			</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3140995465af49b27790431_52953853', "summary");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8159269175af49b27791a55_71031387', "information");
?>

		</div>
	</div>
</div>
</body>
</html><?php }
/* {block "title"} */
class Block_18450345245af49b27786466_71838677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18450345245af49b27786466_71838677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "summary"} */
class Block_3140995465af49b27790431_52953853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_3140995465af49b27790431_52953853',
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
					You friends here.
				</p>
			</div>
<?php
}
}
/* {/block "summary"} */
/* {block "information"} */
class Block_8159269175af49b27791a55_71031387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_8159269175af49b27791a55_71031387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
<form role="form" id="announceform" action="friendaction.php" method="post">
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
					<input type="submit" name="submit" value="Accept" />
					<input type="submit" name="submit" value="Decline" />
				</div>  
</form>   
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
<form role="form" id="announceform" action="#" method="post">
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
/* {/block "information"} */
}
