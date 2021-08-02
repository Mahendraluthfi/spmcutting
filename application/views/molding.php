<h3>Molding Plan Tools</h3>
<form id="frm">
<div class="row mb-3">
	<div class="col-6">
		<input type="text" class="form-control" name="string" placeholder="Insert Size, quantity plan">
	</div>
	<div class="col-1">
		<button type="button" onclick="convert()" class="btn btn-primary">Convert</button>
	</div>
</div>
</form>
<div class="row">
	<div class="col-3">
		<div class="card">
			<div class="card-body">
						
				<table class="table table-sm table-bordered">
					<tbody id="show">
						
					</tbody>
				</table>
			</div>		
		</div>		
	</div>
</div>

<script>
	function convert() {
		$.ajax({
            url : '<?php echo base_url('setting/molding_explode') ?>',
            type: "POST",
            data: $('#frm').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               // $('#modal-id').modal('hide');
              console.log(data);
              $('#frm')[0].reset();
              var html = '';
              var i;
              var no = 1;
              for(i=0; i<data.length; i++){   
                html += "<tr>"+
                  "<td>"+data[i][0]+"</td>"+
                  "<td>"+data[i][1]+"</td>"+                  
                  "</tr>";                                     
              }
              $('#show').html(html);   
              
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        }); 
	}

</script>