{extends file = "_base_.tpl"}

{block name = "title"}{$arr.jobtitle}{/block}

{block name = 'summary'}
<form role="form" id="announceform" action="jobaction_student.php" method="post">
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
				{if $arr.status eq "Noapply" }
				<input type="submit" name="submit" value="Apply {$arr.aid}" />
				{elseif $arr.status eq "Accepted"}
				<h4>
					Your apply has been accepted.
				</h4>
				{elseif $arr.status eq "Declined"}
				<h4>
					Your apply has been accepted.
				</h4>
				{else}
				<h4>
					Your apply has not been answered.
				</h4>
				{/if}
				<input type="submit" name="submit" value="See more information about {$arr.cemail}" />
			</div>
</form>
{/block}

{block name = 'information'}
{/block}