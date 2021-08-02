<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login SPM Cutting</title>
    <link rel="icon" href="<?php echo base_url('asset/dist/img/mas_icon.png') ?>">      
    <!-- CSS files -->
    <link href="<?php echo base_url() ?>asset/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>asset/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
      <div class="container-tight py-6">
        <div class="text-center mb-4">
          <a href="#"><img src="<?php echo base_url() ?>asset/dist/img/logo.png" height="36" alt=""></a>
        </div>
        <?php echo form_open('login/submit', array('class' => 'card card-md')); ?>
          <div class="card-body">            
            <h2 class="card-title text-center mb-3">
              SUPERMARKET CUTTING
            </h2>
            <div class="mb-3">
              <label class="form-label">EPF</label>
              <input type="text" name="epf" class="form-control" placeholder="Enter EPF Number">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password                
              </label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control"  placeholder="Password"  autocomplete="off">
              </div>
            </div>
          
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
        </form>
        <!-- <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="<?php echo base_url() ?>asset/sign-up.html" tabindex="-1">Sign up</a>
        </div> -->
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
  </body>
</html>