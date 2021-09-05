
<?php include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo $adminbaseurl;?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <div id="error" style="color: red;"></div>
              <?php
              $flag = isset($_GET['flg']) ? $_GET['flg'] : '';
              if ($flag == 'register') { ?>
                
              
              <div class="alert alert-success">
                <p>register success</p>
              </div>  
              <?php } 
                if($flag == 'alreadyavailable'){ ?>
                  <div class="alert alert-danger">
                   <p>Email Already Registerd.</p>
              </div>
              <?php 
            }
              ?>

              <form class="user" action="registration.php" method="POST" id="registrationform">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="firstname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                  
                
                <hr>
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo $adminbaseurl; ?>login.php">Already have an account? Login!</a>
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
     $('#registrationform').submit(function(e){
      //form submit rokne ke liye
      e.preventDefault();
      var fname = $('#exampleFirstName').val();
      var lname = $('#exampleLastName').val();
      var pass = $('#exampleInputPassword').val();
      var conpass = $('#exampleRepeatPassword').val();
      var email = $('#exampleInputEmail').val();
      if (email == '') 
      {
        $('#error').html('<p>Email required.</p>');
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
      if(fname == '')
      {
        $('#error').html('<p>Please Insert First Name.</p>');
        return false;
      }
      else if(lname == '')
      {
        $('#error').html('<p>Please Insert Last Name.</p>');
        return false;
      }

       if(email == '')
       {
        $('#error').html('<p>Invalid email.</p>');
        return false;
       }
      if(pass != '')
      {
        if(pass != conpass)
        {
          $('#error').html('<p>password not Matched.</p>');
          return false;
        }
        else $('#registrationform')[0].submit();
      }
      else
      {
        $('#error').html('<p>password required.</p>');
        return false;
        
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
