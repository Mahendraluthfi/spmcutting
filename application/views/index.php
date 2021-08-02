<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>SPM Cutting</title>
    <link rel="icon" href="<?php echo base_url('asset/dist/img/mas_icon.png') ?>">      

    <!-- CSS files -->
    <link href="<?php echo base_url() ?>asset/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/demo.min.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/dist/jquery.dataTables.min.css">     -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">   
    <script src="<?php echo base_url() ?>asset/dist/jquery-3.3.1.min.js"></script>    

  </head>
  <body class="antialiased">
    <div class="page">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="<?php echo base_url() ?>">
              <img src="<?php echo base_url() ?>asset/dist/img/mas_icon.png" style="margin-right: 10px;" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a> Supermarket Cutting
          </h1>
          <div class="navbar-nav flex-row order-md-last">            
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url() ?>asset/dist/img/user.png)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div><?php echo $this->session->userdata('username'); ?></div>
                  <!-- <div class="mt-1 small text-muted">UI Designer</div> -->
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <?php if ($this->session->userdata('level') == '1') { ?>
                <a href="<?php echo base_url() ?>setting" class="dropdown-item">Settings</a>
                <a href="<?php echo base_url() ?>setting/molding" class="dropdown-item">Molding Tools</a>
                <a href="<?php echo base_url() ?>user" class="dropdown-item">User</a>
                <?php } ?>

                <a href="<?php echo base_url() ?>login/logout" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url() ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="5 12 3 12 12 3 21 12 19 12"></polyline><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                    </span>
                      <span class="nav-link-title">
                        Home
                      </span>
                  </a>
                </li>                          
              </ul>
              <div class="ms-md-auto ps-md-4 py-2 py-md-0 me-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0">
              </div>
            </div>
          </div>
        </div>
      </header>   
     
      <div class="content">
        <div class="container-xl d-flex flex-column">
          <?php $this->load->view($content); ?>
        </div>        
      </div>
    </div>

   
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?php echo base_url() ?>asset/dist/js/tabler.min.js"></script> 
    <script src="<?php echo base_url() ?>asset/dist/jquery.dataTables.min.js"></script>    
    <script>
        $('#myTable').DataTable();              
        $('#myTable1').DataTable();              
    </script>  
  </body>
</html>