<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_demande']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit </h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="modal/edit.php">
				<input type="hidden" class="form-control" name="id_demande" value="<?php echo $row['id_demande']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">traitement </label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="verif_RMG">
                                <option selected value="1">accepter préliminaire</option>
                                <option value="2">Accepter finale</option>
                                <option value="3">Refuser</option>
						</select>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>