{extends file = "_base_.tpl"}

{block name = "title"}{$arr.sname}{/block}
{block name = 'summary'}
<form role="form" id="announceform" action="profile_edit.php" method="post">
			<div class="jumbotron">
				<h1>
					{$arr.sname}
				</h1>
				<h3>
					Student email:
				</h3>
				<p>
					{$arr.semail}
				</p>
				<h3>
					Student GPA:
				</h3>
				<p>
					{$arr.sGPA}
				</p>
				<h3>
					Student level:
				</h3>
				<p>
					{$arr.slevel}
				</p>
				<h3>
					Student university:
				</h3>
				<p>
					{$arr.suniversity}
				</p>
				<h3>
					Student major:
				</h3>
				<p>
					{$arr.smajor}
				</p>
				<h3>
					Student description:
				</h3>
				<p>
					{$arr.sdescription}
				</p>
				{if $type eq "Student"}
				<input type="submit" name="submit" value="Edit" />
				{else}
				<p></p>
				{/if}
			</div>
</form>
{/block}

{block name = 'information'}
{/block}