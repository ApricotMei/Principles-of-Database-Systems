{extends file = "_base_.tpl"}

{block name = "title"}{$arr1.cname}{/block}

{block name = 'summary'}
{if $type eq "Student"}
<form role="form" id="announceform" action="followaction.php" method="post">
{else}
<form role="form" id="announceform" action="profile_edit.php" method="post">
{/if}
			<div class="jumbotron">
				<h1>
					{$arr1.cname}
				</h1>
				<h3>
					Company email:
				</h3>
				<p>
					{$arr1.cemail}
				</p>
				<h3>
					Company industry:
				</h3>
				<p>
					{$arr1.cindustry}
				</p>
				<h3>
					Company address:
				</h3>
				<p>
					{$arr1.caddress}
				</p>
				<h3>
					Company description:
				</h3>
				<p>
					{$arr1.cdescription}
				</p>
				{if $type eq "Student"}
				{if $arr1.status eq "Followed"}
				<h2>
					You have followed this company.
				</h2>
				{else}
				<input type="text" style = "display:none" name="cemail" value="{$arr1.cemail}" />
				<input type="submit" name="submit" value="Follow" />
				{/if}
				{else}
				<input type="submit" name="submit" value="Edit" />
				<p></p>
				{/if}
			</div>
</form>
{/block}

{block name = 'information'}
			<div class="row clearfix">
{foreach item=$announce from=$arr2}
{if $type eq "Student"}
<form role="form" id="announceform" action="jobview_student.php" method="post">
{else}
<form role="form" id="announceform" action="jobview_company.php" method="post">
{/if}
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
</div>
{/block}