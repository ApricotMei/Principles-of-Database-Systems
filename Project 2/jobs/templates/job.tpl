{extends file = "_base_.tpl"}

{block name = "title"}Issue a job{/block}

{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					You can Issue a job here.
				</p>
			</div>

			<form role="form" id="jobform" action="jobsave.php" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1">Job title</label><input type="text" class="form-control" id="exampleInputEmail1" name="title" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job location</label><input type="text" class="form-control" id="exampleInputPassword1" name="location" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Job salary</label><input type="text" class="form-control" id="exampleInputEmail1" name="salary" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job major</label><input type="text" class="form-control" id="exampleInputPassword1" name="major" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Job level</label><input type="text" class="form-control" id="exampleInputPassword1" name="level" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Job description</label><input type="text" class="form-control" id="exampleInputEmail1" name="description" />
				</div>
				<input type="submit" name="submit" value="Save" />
			</form>

{/block}

{block name = 'information'}
{/block}