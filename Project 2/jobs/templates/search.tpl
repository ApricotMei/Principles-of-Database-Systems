{extends file = "_base_.tpl"}

{block name = "title"}Search{/block}

{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					Hello, user!
				</h1>
				<p>
					The search results are as follows.
				</p>
			</div>
{/block}

{block name = 'information'}
			<div class="row clearfix">
{if $type eq "Company"}
{foreach item=$student from=$arr}
<form role="form" id="announceform" action="jobaction_company.php" method="post">
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
					<input type="submit" name="submit" value="More details about the student." />
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