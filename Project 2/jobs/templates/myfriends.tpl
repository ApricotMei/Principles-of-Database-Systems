<!DOCTYPE html>
<html>
   <head>
      <title>{block name = "title"}{/block}Friend--Jobs</title>
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
					<form class="navbar-form navbar-left" role="search" id="searchform" action="searchfriend.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="keyword" />
						</div> <input type="submit" name="submit" value="Search" />
					</form>

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

				</div>
				
			</nav>
{block name = "summary"}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					You friends here.
				</p>
			</div>
{/block}

{block name = "information"}
			<div class="row clearfix">
{foreach item=$student from=$arr2}
<form role="form" id="announceform" action="friendaction.php" method="post">
				<div class="col-md-4 column">
					<h2>
						{$student.sname}
					</h2>
					<h4>
						Student GPA:
					</h4>
					<p>
						{$student.sGPA}
					</p>
					<h4>
						Student level:
					</h4>
					<p>
						{$student.slevel}
					</p>
					<h4>
						Student university:
					</h4>
					<p>
						{$student.suniversity}
					</p>
					<h4>
						Student major:
					</h4>
					<p>
						{$student.smajor}
					</p>
					<input type="text" style="display:none" name="stuemail" value="{$student.semail}" />
					<input type="submit" name="submit" value="Accept" />
					<input type="submit" name="submit" value="Decline" />
				</div>  
</form>   
{/foreach}

{foreach item=$student from=$arr1}
<form role="form" id="announceform" action="#" method="post">
				<div class="col-md-4 column">
					<h2>
						{$student.sname}
					</h2>
					<h4>
						Student GPA:
					</h4>
					<p>
						{$student.sGPA}
					</p>
					<h4>
						Student level:
					</h4>
					<p>
						{$student.slevel}
					</p>
					<h4>
						Student university:
					</h4>
					<p>
						{$student.suniversity}
					</p>
					<h4>
						Student major:
					</h4>
					<p>
						{$student.smajor}
					</p>
				</div>  
</form>   
{/foreach}
</div>
{/block}
		</div>
	</div>
</div>
</body>
</html>