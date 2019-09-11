<?php
/* Smarty version 3.1.32, created on 2018-05-10 20:51:42
  from 'D:\xampp\htdocs\jobs\templates\friend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af494be059b87_08027289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a9115c63ba45ae5ef95f87846269b5d918488c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\friend.tpl',
      1 => 1525976811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af494be059b87_08027289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
   <head>
      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9730899145af494be03e355_12930226', "title");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66753545af494be045167_58298661', "summary");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15550818135af494be046440_66842708', "information");
?>

		</div>
	</div>
</div>
</body>
</html><?php }
/* {block "title"} */
class Block_9730899145af494be03e355_12930226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9730899145af494be03e355_12930226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "summary"} */
class Block_66753545af494be045167_58298661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_66753545af494be045167_58298661',
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
					You can search student here.
				</p>
			</div>
<?php
}
}
/* {/block "summary"} */
/* {block "information"} */
class Block_15550818135af494be046440_66842708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_15550818135af494be046440_66842708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
<form role="form" id="announceform" action="friendrequest.php" method="post">
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
					<?php if ($_smarty_tpl->tpl_vars['student']->value['friend'] == "yes") {?>
					<h4>You are friends</h4>
					<?php } else { ?>
					<input type="submit" name="submit" value="Send a friend request" />
					<?php }?>
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
