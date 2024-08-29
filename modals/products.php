<!-- add user form -->
<div class="modal fade fixed-right" id="addUser" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Register new product</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
					<div class="row">
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Type<span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<select type="text" required name="user_access_level" class="form-control">
									<option value="">Select</option>
									<option value="ECM">Shamba</option>
									<option value="ECMS">Nyumba</option>
								</select>
							</div>
						</div>

						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Price from <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_personal_number" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Price to <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<input type="text" required name="user_email" class="form-control">
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-6 col-xl-6">
							<label class="form-control-label">Image <span class="text-danger">*</span></label>
							
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFile">
									<label class="custom-file-label" for="exampleInputFile">Choose file</label>
								</div>								
							</div>
						</div>
						<div class="form-group col-sm-12 col-lg-12 col-xl-12">
							<label class="form-control-label">Description <span class="text-danger">*</span></label>
							<div class="input-group input-group-merge">
								<textarea class="form-control" required rows="3" placeholder="Enter ..."></textarea>
							</div>
						</div>
					</div>
					<div class="text-right">
						<button type="submit" name="Add_User" class="btn btn-outline-success">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>