{extends file = "_base_.tpl"}

{block name = "title"}Index{/block}

{block name = 'summary'}
{if $name eq "NONE"}
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

{elseif $type eq "Company"}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					Welcome to the jobs system, all the announcements you post is below.
				</p>	
			</div>

{else}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					Welcome to the jobs system, here are some announcements you might be interested in.
				</p>	
			</div>

{/if}

{/block}

{block name = 'information'}
			<div class="row clearfix">
{if $name eq "NONE"}
{foreach item=$announce from=$arr1}
				<div class="col-md-4 column">
					<h2>
						{$announce.jobtitle}
					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						{$announce.joblocation}
					</p>
					<h4>
						Company:
					</h4>
					<p>
						{$announce.company}
					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						{$announce.jobsalary}
					</p>
					<h4>
						Job major:
					</h4>
					<p>
						{$announce.jobmajor}
					</p>
					<p>
						 <a class="btn" href="signin.php">View details »</a>
					</p>
				</div>  
   
{/foreach} 
{elseif $type eq "Company"}
{foreach item=$announce from=$arr4}
<form role="form" id="announceform" action="jobview_company.php" method="post">
				<div class="col-md-4 column">
					<h2>
						{$announce.jobtitle}
					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						{$announce.joblocation}
					</p>
					<h4>
						Company:
					</h4>
					<p>
						{$announce.company}
					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						{$announce.jobsalary}
					</p>
					<h4>
						Job major:
					</h4>
					<p>
						{$announce.jobmajor}
					</p>
					<input type="submit" name="submit" value="More details about {$announce.aid}" />
				</div>
</form>  
   
{/foreach}
{else}
{foreach item=$announce from=$arr3}
<form role="form" id="announceform" action="jobview_student.php" method="post">
				<div class="col-md-4 column">
					<h2>
						{$announce.jobtitle}
					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						{$announce.joblocation}
					</p>
					<h4>
						Company:
					</h4>
					<p>
						{$announce.company}
					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						{$announce.jobsalary}
					</p>
					<h4>
						Job major:
					</h4>
					<p>
						{$announce.jobmajor}
					</p>
					<input type="submit" name="submit" value="More details about {$announce.aid}" />
				</div>  

</form>
{/foreach}
{foreach item=$announce from=$arr2}
<form role="form" id="announceform" action="jobview_student.php" method="post">
				<div class="col-md-4 column">
					<h2>
						{$announce.jobtitle}
					</h2>
					<h4>
						Job location:
					</h4>
					<p>
						{$announce.joblocation}
					</p>
					<h4>
						Company:
					</h4>
					<p>
						{$announce.company}
					</p>
					<h4>
						Job salary:
					</h4>
					<p>
						{$announce.jobsalary}
					</p>
					<h4>
						Job major:
					</h4>
					<p>
						{$announce.jobmajor}
					</p>
					<input type="submit" name="submit" value="More details about {$announce.aid}" />
				</div>  
</form>
{/foreach}
{/if}
</div>
{/block}
