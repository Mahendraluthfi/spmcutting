 <style>
    .btn-update{
      height: 50px;
      width: 50px;
      font-size: 1.5rem;
    }
    .btn-update-center{
      height: 50px;          
      font-size: 1.5rem;
    }    
    hr{
      margin: 1px;
      color: #000;      
    }
</style>
<div class="row mb-3">
  <div class="text-center">
    <span class="badge bg-dark">ZERO LEVEL</span>
    <span class="badge bg-danger">< MIN LEVEL</span>
    <span class="badge bg-primary">SAFE LEVEL</span>
    <span class="badge bg-success">> MAX LEVEL</span>
  </div>
</div>
<div class="row">
  <?php foreach ($line as $data) { ?>
  <div class="col-1" style="padding: 4px;">
    <div class="card text-center border-dark text-white" style="font-size: 1rem;" onclick="show('<?php echo $data->idline ?>')">
          <div class="card-body p-2" id="card-<?php echo $data->line ?>">
            Line <?php echo $data->line; ?>
          </div>
          <div class="card-footer p-2 bg-white">
            <span id="stack-<?php echo $data->line?>"></span><hr>     
            <span id="qty-<?php echo $data->line ?>" class="text-primary"></span>              
          </div>
        </div>
  </div>
  <?php } ?>
</div>

 <div class="modal modal-blur fade" id="modal-simple" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header"></div> -->
          <div class="modal-body pb-0">
          <h2 class="text-center title-line"></h2>

              <div class="card mb-3 border-dark">
                <div class="card-body p-2" style="font-weight: bold;">
                  <div class="row">
                    <div class="col text-center">
                      BIN LEVEL <br>
                      <form id="updatebin">
                        <div class="row">
                          <div class="col">
                            <!-- <button type="button" class="btn btn-update btn-danger btn-min">-</button>                       -->
                          </div>
                          <div class="col">
                            <input type="number" min="0" class="form-control btn-update-center text-center" name="binstack"> 
                            <input type="hidden" name="idline">                     
                          </div>
                          <div class="col">
                            <!-- <button type="button" class="btn btn-update btn-success btn-plus">+</button>                       -->
                          </div>
                        </div><p></p>
                        <div class="row">                      
                          <div class="col">                            
                            <!-- <input type="number" min="0" class="form-control btn-update-center text-center" name="binqty">                          -->
                              <div class="form-selectgroup">
                                <label class="form-selectgroup-item">
                                  <input type="radio" name="type" value="1" class="form-selectgroup-input" required="">
                                  <span class="form-selectgroup-label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M7 12h14l-3 -3m0 6l3 -3" /></svg> Send</span>
                                </label>
                                <label class="form-selectgroup-item">
                                  <input type="radio" name="type" value="2" class="form-selectgroup-input" required="">
                                  <span class="form-selectgroup-label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M20 12h-13l3 -3m0 6l-3 -3" /></svg> Receive</span>
                                </label>   
                                <label class="form-selectgroup-item">
                                  <input type="radio" name="type" value="3" class="form-selectgroup-input" required="">
                                  <span class="form-selectgroup-label"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="7" cy="17" r="2" /><circle cx="17" cy="17" r="2" /><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /><path d="M6 10h4m-2 -2v4" /></svg> Ambulance</span>
                                </label>                                
                              </div><p></p>
                              <input type="number" min="0" class="form-control" name="qty" placeholder="Quantity"><p></p>
                              <button type="button" class="btn btn-primary" onclick="updatebin()">UPDATE</button>
                          </div>                          
                        </div>                                        
                      </form>                    
                    </div>
                    <div class="col">
                       <div class="card border-dark">
                        <div class="card-body">
                            <div class="row text-center">
                                <button type="button" onclick="resetspm()" class="btn btn-danger btn-sm mb-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" /><path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg> Reset SPM</button>            
                                <div class="col">
                                    Received
                                    <button type="button" class="btn btn-primary" style="width: 100%; font-size: 1.2rem;">
                                        <span class="totalreceive"></span>
                                    </button>
                                </div>
                                <div class="col">
                                    Sent
                                    <button type="button" class="btn btn-orange" style="width: 100%; font-size: 1.2rem;">
                                        <span class="totalsend"></span>
                                    </button>
                                </div>
                            </div><p></p>
                            <div class="row">
                                <div class="col" style="font-size: 0.6rem;height:150px;overflow:auto">
                                    <table class="table table-sm table-striped">
                                      <thead>
                                        <tr>
                                          <th>Time</th>
                                          <th>IN</th>
                                          <th>OUT</th>
                                          <th>#</th>
                                        </tr>
                                      </thead>
                                      <tbody id="showtable"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>                                  
                </div>                
              </div>
            
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
  </div>

 <script>

      function show(id) {
        $.ajax({
            url : "<?php echo site_url('index.php/welcome/getbin')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
                // console.log(data);
                $('.title-line').text('Line '+data.line);
                $('[name="binstack"]').val(data.stack);
                // $('[name="binqty"]').val(data.qty);
                $('[name="idline"]').val(data.idline);
                $('#modal-simple').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                location.reload();
            }
        });

        $.ajax({
          url : "<?php echo site_url('index.php/welcome/getspm')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              // console.log(data);
              $('.totalreceive').text(data.receive);
              $('.totalsend').text(data.send);
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              location.reload();
          }
        });

        $.ajax({
          url : "<?php echo site_url('index.php/welcome/getlog')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
              var html = '';
              var i;
              var no = 1;
              for(i=0; i<data.length; i++){   
                html += "<tr>"+
                  "<td>"+data[i].waktu+"</td>"+
                  "<td>"+data[i].receive+"</td>"+
                  "<td>"+data[i].send+"</td>"+                    
                  "<td>"+data[i].user+"</td>"+                    
                  "</tr>";                                     
              }
              $('#showtable').html(html);   
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              location.reload();
          }
        });
      }

      function updatebin() {
          var getSelectedValue = document.querySelector( 
                'input[name="type"]:checked'); 
              
          if(getSelectedValue != null) { 
              // alert('not null');              
              $.ajax({
                  url : "<?php echo site_url('index.php/welcome/updatebin')?>/",
                  type: "POST",
                  data: $('#updatebin').serialize(),
                  dataType: "JSON",
                  success: function(data)
                  {     
                    console.log(data);          
                     $('#updatebin')[0].reset();
                     $('#modal-simple').modal('hide');
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                      location.reload();// for reload a page
                      // alert('Error adding / update data');
                  }
              });
          } 
          else { 
              alert('First, choose Send or Receive !');
          } 
      }

      function resetspm() {
          var id = $('[name="idline"]').val();
          var result = confirm("Reset qty SPM ?");
          if (result) {
              //alert(id);
              //Logic to delete the item
              $.ajax({
                url : "<?php echo site_url('index.php/welcome/resetspm')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    // console.log(data);
                    // $('.totalreceive').text(data.receive);
                    // $('.totalsend').text(data.send);
                    alert('Reset Successfully !');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    location.reload();
                }
              });
          }
      }

      $('.btn-plus').on('click', function(){
        var valbin = parseInt($('[name="binstack"]').val());
        $('[name="binstack"]').val(valbin+1);        
      });

      $('.btn-min').on('click', function(){
        var valbin = parseInt($('[name="binstack"]').val());
        $('[name="binstack"]').val(valbin-1);        
      });

      if(typeof(EventSource)!=="undefined"){
          var source = new EventSource("<?php echo base_url('json/getJson') ?>");
          source.addEventListener('message', function(e) {
              var data = JSON.parse(e.data);              
              // console.log(data);

              $('#stack-'+data.line).text(data.stack);
              $('#qty-'+data.line).text(data.balance);             
              $('#card-'+data.line).removeAttr('class');
              $('#card-'+data.line).attr('class','card-body p-2 '+data.color);             
          }, false);
        }else{
           // $("#area").append("browser anda tidak support");
           alert('Browser not support');
        }
      
    </script>