<div class="row">
	<div class="col">
		<div class="card">
		    <div class="card-header"><h4>User</h4></div>
		    <div class="card-body">
		    	
		    	<button type="button" class="btn btn-primary btn-sm" onclick="add()">Add User</button>	<p></p>	    	
		    	<table class="table table-bordered table-striped" id="myTable">
		    		<thead>
		    			<tr>
		    				<th width="1%">No</th>
		    				<th>EPF</th>
		    				<th>Username</th>
		    				<th>Level</th>
		    				<th width="1%">#</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php $no=1; foreach ($get as $data) { ?>
		    			<tr>
		    				<td><?php echo $no++ ?></td>
		    				<td><?php echo $data->epf ?></td>
		    				<td><?php echo $data->username ?></td>
		    				<td><?php if($data->level == 1){echo "ADMIN";}else{echo "USER";} ?></td>
		    				<td>
		    					<a href="<?php echo base_url('user/del_user/'.$data->epf) ?>" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">
		    						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="0" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
		    							<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
		    							<line x1="4" y1="7" x2="20" y2="7" />
		    							<line x1="10" y1="11" x2="10" y2="17" />
		    							<line x1="14" y1="11" x2="14" y2="17" />
		    							<path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
		    							<path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
		    						</svg> Delete
		    					</a>
		    				</td>
		    			</tr>
		    			<?php } ?>
		    		</tbody>
		    	</table>		   
		    </div>
		</div>		
	</div>

</div>

<div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"><h3>Add Line</h3></div>
      <div class="modal-body">
      	<?php echo form_open('user/adduser'); ?>
      		<div class="form-group mb-3 row">
            	<label class="form-label col-3 col-form-label">EPF</label>
            	<div class="col">
              		<input type="text" required="" name="epf" class="form-control" placeholder="EPF Number">	              
            	</div>
          	</div>
          	<div class="form-group mb-3 row">
            	<label class="form-label col-3 col-form-label">Username</label>
            	<div class="col">
              		<input type="text" required="" name="username" class="form-control" placeholder="Username">	              
            	</div>
          	</div>
          	<div class="form-group mb-3 row">
            	<label class="form-label col-3 col-form-label">Level</label>
            	<div class="col">
            		<select name="level" class="form-control">
            			<option value="1">ADMIN</option>
            			<option value="0">USER</option>
            		</select>
            	</div>
          	</div>
          	<span class="text-danger">Password default is EPF</span>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>            
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>            
      </div>
      	<?php echo form_close(); ?>
    </div>
  </div>
</div>

<script>
	function add() {
		$('#modal-add').modal('show');
	}
</script>
