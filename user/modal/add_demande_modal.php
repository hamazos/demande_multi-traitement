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
			<form method="POST" action="modal/add_demande.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">demande:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="titre">
							<option selected>....</option>
							<option value='PC Portable'>PC Portable</option>
							<option value='Pc bureau'>Pc bureau</option>
							<option value='Imprimante'>Imprimante</option>
                            <option value='Telephone'>Telephone</option>
                            <option value='Encre noire'>Encre noire </option>
                            <option value='Encre couleur'>Encre couleur </option>
                            <option value='Cartouche noire'>Cartouche noire </option>
                            <option value='Cartouche couleur'>Cartouche couleur </option>
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