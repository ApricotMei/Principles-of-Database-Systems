<?php
/* Smarty version 3.1.32, created on 2018-05-10 21:05:16
  from 'D:\xampp\htdocs\jobs\templates\_base_.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af497ec30ef77_25047545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c065cdcd6e5bb9652613a6e8d2e89c3911a0cd0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\templates\\_base_.tpl',
      1 => 1525979104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af497ec30ef77_25047545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
   <head>
      <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8959215725af497ec2fe051_94807138', "title");
?>
--Jobs</title>
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
					<form class="navbar-form navbar-left" role="search" id="searchform" action="search.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="keyword" />
						</div> <input type="submit" name="submit" value="Search" />
					</form>
<?php if ($_smarty_tpl->tpl_vars['name']->value == "NONE") {?>
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">As a student<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="signin.php">Sign in</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="signup.php">Sign up</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">As a company<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="signin.php">Sign in</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="signup.php">Sign up</a>
								</li>
							</ul>
						</li>
					</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "Company") {?>
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
								<li class="divider">
								</li>
								<li>
									 <a href="job.php">Issue a job</a>
								</li>
								<li>
									 <a href="index.php">All jobs issued</a>
								</li>
							</ul>
						</li>
					</ul>
<?php } else { ?>
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
<?php }?>
				</div>
				
			</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17830814015af497ec30c833_65026001', "summary");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8726035025af497ec30d802_15109817', "information");
?>

		</div>
	</div>
</div>
</body>
</html><?php }
/* {block "title"} */
class Block_8959215725af497ec2fe051_94807138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8959215725af497ec2fe051_94807138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "summary"} */
class Block_17830814015af497ec30c833_65026001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'summary' => 
  array (
    0 => 'Block_17830814015af497ec30c833_65026001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="jumbotron">
				<h1>
					Hello, world!
				</h1>
				<p>
					This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
				</p>
				<p>
					 <a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
<?php
}
}
/* {/block "summary"} */
/* {block "information"} */
class Block_8726035025af497ec30d802_15109817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'information' => 
  array (
    0 => 'Block_8726035025af497ec30d802_15109817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="row clearfix">
				<div class="col-md-4 column">
					<h2>
						Heading
					</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						 <a class="btn" href="#">View details »</a>
					</p>
				</div>
				<div class="col-md-4 column">
					<h2>
						Heading
					</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						 <a class="btn" href="#">View details »</a>
					</p>
				</div>
				<div class="col-md-4 column">
					<h2>
						Heading
					</h2>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						 <a class="btn" href="#">View details »</a>
					</p>
				</div>
			</div>
<?php
}
}
/* {/block "information"} */
}
