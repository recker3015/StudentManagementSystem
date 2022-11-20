<?php 
require_once '../../backend/db.php';
if(isset($_POST['sub']))
{
$name=$_POST['s_name'];
$email=$_POST['s_email'];
$sid=$_POST['s_id'];
$pass=$_POST['s_pass'];
$ph=$_POST['s_ph'];

$qry="INSERT INTO `user_info` (`u_id`, `u_pass`, `isAdmin`, `u_email`, `u_contact`, `u_name`) VALUES ('$sid', '$pass', '0', '$email', '$ph', '$name')";

$excs=mysqli_query( $con, $qry);
if($excs)
{
    header('location:login.php');
}
else
{
    echo "Error";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
   Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
 
  <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-3 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="#">
              
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  
                </li>
                <li class="nav-item">
                  
                </li>
                <li class="nav-item">
                 
                  </a>
                </li>
                <li class="nav-item">
                  
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="#" 
                  class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Jorhat Engineering College</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
    <section>
      <div class="page-header min-vh-75" style="background:linear-gradient(113deg, rgba(20,211,250,1) 0%,
       rgba(198,218,249,1) 19%, rgba(22,177,139,0.8519782913165266) 46%,
       rgba(43,152,184,0.8547794117647058) 67%, rgba(234,141,180,1) 99%);">
        <div class="container" >
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                  <p class="mb-0">Please Provide Correct Information To Register</p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="POST">
                  <div class="mb-3">
                                    <input type="text" class="form-control" name="s_name" placeholder="Full Name" aria-label="Name" aria-describedby="text-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="s_id" placeholder="User ID" aria-label="Name" aria-describedby="text-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="s_email" class="form-control" placeholder="Email ID" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="phone" name="s_ph" class="form-control" placeholder="Contact No" aria-label="Contact no" aria-describedby="contact-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="s_pass" class="form-control" placeholder="Create Password" aria-label="Password" aria-describedby="password-addon">
                                </div>
                    <div class="text-center">
                      <input name="sub" type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0"></input>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                  Already have an account?
                    <a href="login.php" class="text-primary text-gradient font-weight-bold">Sign In</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" 
                style="background-image:url('../../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="#" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> by Abhishek & Jyotim
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>