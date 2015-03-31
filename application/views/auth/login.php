<!-- <div>
  <h1><?php echo lang('login_heading');?></h1>
  <p><?php echo lang('login_subheading');?></p>

  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/login");?>

    <p>
      <?php echo lang('login_identity_label', 'identity');?>
      <?php echo form_input($identity);?>
    </p>

    <p>
      <?php echo lang('login_password_label', 'password');?>
      <?php echo form_input($password);?>
    </p>

    <p>
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </p>


    <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

  <?php echo form_close();?>

  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>EBD | Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
  <style>
    body {
      background: #ddd;
    }
    .login-container {
      width: 300px;
      margin: 10% auto;
      background: #fff;
      padding: 20px;
    }
    .login-footer {
      text-align: right;
    }
    .form-btn{
      color: #FFF;
      background-color: #26a69a;
      text-align: center;
      border: none;
      padding: 15px 30px;
      margin: 0 12px;
    }
  </style>
</head>
<body>
  <div class="login-container">
  <h2 class="center-align">Login</h2>
  <form action="http://localhost/essejonatas/ebd/index.php/auth/login" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="input-field col s12">
        <label for="email"></label>
        <input id="email" name="identity" placeholder="email" type="email">        
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for="password"></label>
        <input id="password" name="password" placeholder="senha" type="password">
      </div>
    </div>
    <div class="login-footer">
      <input type="submit" class="form-btn" value="login">
    </div>
  </form>
</div>
</body>
</html>
