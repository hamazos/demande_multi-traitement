<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add New</h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="modal/add_user.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prenom" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">pseudo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pseudo" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">privilege:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="type">
							<option selected> </option>
							<option value=0>administrateur</option>
							<option value=1>Demandeur</option>
							<option value=2>Informaticien</option>
                            <option value=3>Responsable moyens généraux</option>
                            <option value=4>Directeur administratif et financier</option>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>