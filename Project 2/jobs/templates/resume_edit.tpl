{extends file = "_base_.tpl"}

{block name = "title"}Edit Resume{/block}

{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					You can modify your resume.
				</p>
			</div>

			<form role="form" id="resumeform" action="resumesave.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Student name</label><input type="text" class="form-control" id="exampleInputEmail1" name="sname" value="{$arr.sname}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student GPA</label><input type="text" class="form-control" id="exampleInputPassword1" name="sGPA" value="{$arr.sGPA}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student level</label><input type="text" class="form-control" id="exampleInputEmail1" name="slevel" value="{$arr.slevel}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student university</label><input type="text" class="form-control" id="exampleInputPassword1" name="suniversity" value="{$arr.suniversity}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student major</label><input type="text" class="form-control" id="exampleInputEmail1" name="smajor" value="{$arr.smajor}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student description</label><input type="text" class="form-control" id="exampleInputPassword1" name="sdescription" value="{$arr.sdescription}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Apply position</label><input type="text" class="form-control" id="exampleInputPassword1" name="rposition" value="{$arr1.rposition}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Student practice</label><input type="text" class="form-control" id="exampleInputEmail1" name="rpractice" value="{$arr1.rpractice}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Student project</label><input type="text" class="form-control" id="exampleInputPassword1" name="rproject" value="{$arr1.rproject}" />
				</div>
				<input type="submit" name="submit" value="Save" />
			</form>

{/block}

{block name = 'information'}
{/block}