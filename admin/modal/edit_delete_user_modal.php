<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit </h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="modal/edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">nom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nom" value="<?php echo $row['fname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">prenom:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="prenom" value="<?php echo $row['lname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">pseudo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="pseudo" value="<?php echo $row['pseudo']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">password:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
                        <label class="control-label modal-label">privilege:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="type">
                                <option selected value=0>Administrateur</option>
                                <option value="1">Demandeur</option>
                                <option value="2">Responsable informatique</option>
                                <option value="3">Directeur administratif et financier</option>
                                <option value="4">Responsable moyens généraux</option>
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

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete User</h4>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sûr que vous voulez supprimer</p>
				<!-- <h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2> -->
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="modal/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>