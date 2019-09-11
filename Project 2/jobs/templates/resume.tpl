{extends file = "_base_.tpl"}

{block name = "title"}Resume{/block}

{block name = 'summary'}
<form role="form" id="announceform" action="resume_edit.php" method="post">
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
				<h3>
					Apply position:
				</h3>
				<p>
					{$arr1.rposition}
				</p>
				<h3>
					Student practice:
				</h3>
				<p>
					{$arr1.rpractice}
				</p>
				<h3>
					Student project:
				</h3>
				<p>
					{$arr1.rproject}
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
