<form method="post" class="ajax-submit" autocomplete="off" action="" enctype="multipart/form-data">
	{{ csrf_field()}}
	<input name="_method" type="hidden" value="PATCH">				
	
	<div class="col-md-12">
	 <div class="form-group">
		<label class="control-label">Unit Name</label>						
		<input type="text" class="form-control" name="unit_name" value="" required>
	 </div>
	</div>

		
	<div class="col-md-12">
	  <div class="form-group">
		<button type="submit" class="btn btn-primary">Update</button>
	  </div>
	</div>
</form>

