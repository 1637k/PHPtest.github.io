

<?php 

include 'config.php';
if(isset($_SESSION['userid']))
{
  if($_SESSION['userid'] != '')
{
  header("Location:dashboard.php"); 
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo $adminbaseurl; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo $adminbaseurl; ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">login here</h1>
                  </div>
                 <div id="error" style="color: red;"></div>
                  <!-- <?php
                    $flag = isset($_GET['flg']) ? $_GET['flg'] : '';
                    if ($flag == 'invalid') { ?>
                      
                    
                    <div class="alert alert-danger">
                      <p>Invalid Email Or Password</p>
                    </div>  
                    
                    <?php 
                  } ?> -->
                  <?php 
                    $flag = isset($_GET['flg']) ? $_GET['flg'] : '';
                    if ($flag == 'invalid') { ?>
                      <div class="alert alert-danger">
                        <p>invalid Email or Password</p>
                      </div>
                   <?php }
                   ?>
                  <form class="user" action="login_check.php" method="post" id="login_form">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <!-- div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                      Login
                    </a> -->
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                    <hr>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo $adminbaseurl; ?>index.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo $adminbaseurl; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $adminbaseurl; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo $adminbaseurl; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo $adminbaseurl; ?>js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
    $('#login_form').submit(function(e){
      e.preventDefault();
      var email = $('#exampleInputEmail').val();
      var pass = $('#exampleInputPassword').val();
      if (email == '') 
      {
           $('#error').html('<p>Email required.</p>');
           return false;

      }
      else
      {
        var res = IsEmail(email);
        if (res == false) 
        {
          $('#error').html('<p>Email not valid.</p>');
          return false;
        }
      }
      if (pass == '') 
      {
        $('#error').html('<p>Password Required.</p>');
        return false;
      }
      else
      {
        $('#login_form')[0].submit();
      }
    });

    function IsEmail(email){
      var regex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
      if (!regex.test(email)) {
        return false;
      }
      else{
        return true;
      }
     }
  </script>

</body>

</html>
