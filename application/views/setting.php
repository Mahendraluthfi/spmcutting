<div class="row">
	<div class="col-4">
		<div class="card">
		    <div class="card-header"><h4>Line</h4></div>
		    <div class="card-body">
		    	<button type="button" class="btn btn-primary btn-sm" onclick="add()">Add Line</button>
		    	<button type="button" class="btn btn-success btn-sm" onclick="setminmax()">Set MIN-MAX</button><p></p>
		    	<table class="table table-bordered table-striped" id="myTable">
		    		<thead>
		    			<tr>
		    				<th width="1%">No</th>
		    				<th>Line</th>
		    				<th width="1%">#</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php $no=1; foreach ($line as $data) { ?>
		    			<tr>
		    				<td><?php echo $no++ ?></td>
		    				<td>Line <?php echo $data->line ?></td>
		    				<td>
		    					<a href="<?php echo base_url('setting/del_line/'.$data->idline) ?>" onclick="return confirm('Are you sure ?')" class="btn btn-sm btn-danger">
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

	<div class="col">
		<div class="card">
		    <div class="card-header"><h4>Log Data Today</h4></div>
		    <div class="card-body">
		    	<div class="input-group mb-2">
                  <input type="date" name="viewdate" class="form-control" placeholder="Search Data" value="<?php echo date('Y-m-d') ?>">
                  <button class="btn btn-azure" onclick="viewdata()" type="button">View Data</button>
                </div>
                <p></p>
		    	<table class="table table-striped table-sm table-bordered" id="myTable1">
		    		<thead class="text-center">
		    			<tr>
		    				<th width="1%">No</th>
		    				<th>Line</th>
		    				<th>Timestamp</th>
		    				<th>Function</th>
		    				<th>Receive</th>
		    				<th>Send</th>
		    				<th>User</th>
		    			</tr>
		    		</thead>
		    		<tbody class="text-center">
		    			<?php $no=1; foreach ($log as $data) { ?>
		    			<tr>
		    				<td><?php echo $no++ ?></td>
		    				<td>Line <?php echo $data->line ?></td>
		    				<td><?php echo $data->timestamp ?></td>
		    				<td><?php echo $data->function ?></td>
		    				<td><?php echo number_format($data->receive) ?></td>
		    				<td><?php echo number_format($data->send) ?></td>
		    				<td><?php echo $data->user ?></td>
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
      	<?php echo form_open('setting/addline'); ?>
      	<div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Line</label>
            <div class="col">
              <input type="text" required="" name="line" class="form-control" placeholder="Line Number">	              
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>            
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>            
      </div>
      	<?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal modal-blur fade" id="modal-minmax" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"><h3>Setting MIN-MAX</h3></div>
      <div class="modal-body">
      	<?php echo form_open('setting/setminmax'); ?>
      	<div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">MIN</label>
            <div class="col">
              <input type="number" required="" name="min" class="form-control" value="<?php echo $setup->min ?>">	              
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">MAX</label>
            <div class="col">
              <input type="number" required="" name="max" class="form-control" value="<?php echo $setup->max ?>">	              
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>            
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>            
      </div>
      	<?php echo form_close(); ?>
    </div>
  </div>
</div>

<div class="modal modal-blur fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title-date">View Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
      		<table class="table table-bordered table-hover table-sm" id="example" style="font-size: 12px;">
				<thead>
					<tr class="bg-secondary text-white">
		    				<th width="1%">No</th>
		    				<th>Line</th>
		    				<th>Timestamp</th>
		    				<th>Function</th>
		    				<th>Receive</th>
		    				<th>Send</th>
		    				<th>User</th>
		    			</tr>
				</thead>
				<tbody id="show_data">
					
				</tbody>
			</table>	
          </div>
          <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>            
          </div>
        </div>
      </div>
    </div>


<script>
	function add() {
		$('#modal-add').modal('show');
	}

	function setminmax() {
		$('#modal-minmax').modal('show');
	}

	function viewdata() {
		var tanggal = $('[name="viewdate"]').val();
		var a = $('#example').DataTable();           
        a.clear().draw();
        a.destroy();
		$.ajax({
	        url : "<?php echo site_url('index.php/setting/viewdate')?>/" + tanggal,
	        type: "GET",
	        dataType: "JSON",
	        success: function(data)
	        {	
	        	// console.log(data);
	        	$('.modal-title-date').text('View Date '+tanggal);
	        	var html = '';
                var i;
                var no = 1;
                for(i=0; i<data.length; i++){   
                      html += "<tr class='text-center'>"+
                    "<td>"+no+++"</td>"+
                    // "<td>"+data[i].date+"</td>"+
                    "<td>"+data[i].line+"</td>"+
                    "<td>"+data[i].timestamp+"</td>"+
                    "<td>"+data[i].function+"</td>"+
                    "<td>"+data[i].receive+"</td>"+
                    "<td>"+data[i].send+"</td>"+
                    "<td>"+data[i].user+"</td>"+                    
                    "</tr>";                                     
                }
                $('#show_data').html(html);        				
				$('#example').DataTable({
          			"pageLength": 25
				});    
	        	$('#modal-large').modal('show');
	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            alert('Error get data from ajax');
	        }
	    });
	}
</script>