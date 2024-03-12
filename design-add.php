<?php

include('header.php');

?>




<h2>Add Design</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Design Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_design">
					<input type="hidden" name="action" value="add_design">

					<div class="row">
						<div class="col-xs-6">
							<input type="text" class="form-control required" name="design_name" placeholder="Enter Design Name">
						</div>
						<div class="col-xs-6">
							<input type="text" class="form-control required" name="design_desc" placeholder="Enter Design Description">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_design" class="btn btn-success float-right" value="Add Design" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>