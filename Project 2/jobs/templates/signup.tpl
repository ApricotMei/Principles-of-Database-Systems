{extends file = "_base_.tpl"}

{block name = "title"}Sign up{/block}


{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					Please input a email address and a password to create an account.
				</p>
			</div>

			<form role="form" id="signupform" action="signupaction.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" name="email" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" name="password" />
				</div>
				<div class="form-group">
					 <label for="exampleInputUsername1">Username</label><input type="text" class="form-control" id="exampleInputUsername1" name="username" />
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" id="userType" name="type" value="stu" />I'm a student</label>
				</div> <input type="submit" name="submit" value="Signup" />
			</form>
{/block}

{block name = 'information'}
{/block}