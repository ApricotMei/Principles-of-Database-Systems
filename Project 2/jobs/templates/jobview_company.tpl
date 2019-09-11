{extends file = "_base_.tpl"}

{block name = "title"}{$arr.jobtitle}{/block}

{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					{$arr.jobtitle}
				</h1>
				<h3>
					Job location:
				</h3>
				<p>
					{$arr.joblocation}
				</p>
				<h3>
					Company:
				</h3>
				<p>
					{$arr.company}
				</p>
				<h3>
					Job salary:
				</h3>
				<p>
					{$arr.jobsalary}
				</p>
				<h3>
					Job major:
				</h3>
				<p>
					{$arr.jobmajor}
				</p>
				<h3>
					Job level:
				</h3>
				<p>
					{$arr.joblevel}
				</p>
				<h3>
					Job description:
				</h3>
				<p>
					{$arr.jobdescription}
				</p>
				<h3>
					Job announcedate:
				</h3>
				<p>
					{$arr.announcedate}
				</p>
			</div>
{/block}

{block name = "information"}
{foreach item=$student from=$arr1}
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
					<input type="text" style="display:none" name="announceid" value="{$arr.aid}" />
					<input type="text" style="display:none" name="stuemail" value="{$student.semail}" />
					{if $student.applystatus eq "Unanswered" }
					<input type="submit" name="submit" value="Accept" />
					<input type="submit" name="submit" value="Decline" />
					{elseif $student.applystatus eq "Accepted"}
					<h4>
						Has been accepted.
					</h4>
					{else}
					<h4>
						Has been declined.
					</h4>
					{/if}
					<p></p>
					<input type="submit" name="submit" value="More details about the student." />
				</div>  
</form>
{/foreach}
{/block}