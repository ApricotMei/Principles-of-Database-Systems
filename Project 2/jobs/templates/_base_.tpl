<!DOCTYPE html>
<html>
   <head>
      <title>{block name = "title"}{/block}--Jobs</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
{if $name eq "NONE"}
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
{elseif $type eq "Company"}
					<ul class="nav navbar-nav navbar-right">
						
						<li>
							 <a href="#">{$name}</a>
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
{else}
					<ul class="nav navbar-nav navbar-right">
						
						<li>
							 <a href="#">{$name}</a>
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
{/if}
				</div>
				
			</nav>
{block name = "summary"}
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
{/block}

{block name = "information"}
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
{/block}
		</div>
	</div>
</div>
</body>
</html>