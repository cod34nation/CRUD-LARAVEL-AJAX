<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
	
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form method="post" class="form-horizontal" data-togle="validator">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-lable="Close">
						<span aria-hidden="true"> &times;</span>
					</button>
					<h3 class="modal-title"></h3>
				</div>
				<div class="modal-body">
					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="name" class="col-md-3 control-label">Nama</label>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" id="name" autofocus required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-md-3 control-label">Email</label>
						<div class="col-md-6">
							<input type="email" name="email" class="form-control" id="email" autofocus required>
							<span class="help-block with-errors"></span>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-save">Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel </button>
				</div>
			</form>
		</div>
	</div>

</div>