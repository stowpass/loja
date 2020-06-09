<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Loja Virtual| Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/font-awesome/css/fontawesome.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="register-page" style="min-height: 586.391px;">

  <div class="register-box">
    <div class="register-logo">
      <a href="#"><?php echo lang('create_user_heading');?></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"><?php echo lang('create_user_subheading');?></p>



        <div class="card">
          <div class="card-body register-card-body">


            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open("auth/create_user"); ?>

            <p>
              <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
              <?php echo form_input($first_name); ?>
            </p>

            <p>
              <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
              <?php echo form_input($last_name); ?>
            </p>

            <?php
            if ($identity_column !== 'email') {
              echo '<p>';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</p>';
            }
            ?>

            <p>
              <?php echo lang('create_user_company_label', 'company'); ?> <br />
              <?php echo form_input($company); ?>
            </p>

            <p>
              <?php echo lang('create_user_email_label', 'email'); ?> <br />
              <?php echo form_input($email); ?>
            </p>

            <p>
              <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
              <?php echo form_input($phone); ?>
            </p>

            <p>
              <?php echo lang('create_user_password_label', 'password'); ?> <br />
              <?php echo form_input($password); ?>
            </p>

            <p>
              <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
              <?php echo form_input($password_confirm); ?>
            </p>

            <div class="col-4">
              <p><?php echo form_submit('submit', lang('create_user_submit_btn')); ?></p>
            </div>


            <?php echo form_close(); ?>


            

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

          <script src="<?php echo base_url('assets/template'); ?>/plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap 4 -->
          <script src="<?php echo base_url('assets/template'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- AdminLTE App -->
          <script src="<?php echo base_url('assets/template'); ?>/dist/js/adminlte.min.js"></script>

</body>

</html>