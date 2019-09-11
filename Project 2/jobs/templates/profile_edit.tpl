{extends file = "_base_.tpl"}

{block name = "title"}Profile{/block}

{block name = 'summary'}
			<div class="jumbotron">
				<h1>
					Hello, {$name}!
				</h1>
				<p>
					You can modify your profile.
				</p>
			</div>

			<form role="form" id="profileform" action="profilesave.php" method="post">
{if $type eq "Student"}
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
				<input type="submit" name="submit" value="Save" />
{else}
				<div class="form-group">
					 <label for="exampleInputEmail1">Company name</label><input type="text" class="form-control" id="exampleInputEmail1" name="cname" value="{$arr.cname}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Company industry</label><input type="text" class="form-control" id="exampleInputPassword1" name="cindustry" value="{$arr.cindustry}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputEmail1">Company address</label><input type="text" class="form-control" id="exampleInputEmail1" name="caddress" value="{$arr.caddress}" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Company description</label><input type="text" class="form-control" id="exampleInputPassword1" name="cdescription" value="{$arr.cdescription}" />
				</div>
				<input type="submit" name="submit" value="Save" />
{/if}
			</form>

{/block}

{block name = 'information'}
{/block}