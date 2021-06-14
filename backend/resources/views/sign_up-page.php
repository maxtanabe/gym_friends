<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="/assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ジムフレ
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <link href="/assets/css/style.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
          <a class="nav-link" href="/">
            ジムフレ
          </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <p>LOG IN</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="/assets/img/now-logo.png" alt="">
                </div>
              </div>
              <h4>Create an account</h4>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-signature"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Nickname">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-envelope-square"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-key"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Password" class="form-control" />
                </div>
                <div class="card-footer text-center">
                  <a href="/" class="btn btn-primary btn-round btn-lg btn-block">Create an account</a>
                </div>
              </div>

              <div class="card-footer text-center">
                <a href="/" class="btn btn-neutral btn-twitter btn-round btn-lg btn-block">
                  <i class="fab fa-twitter"></i>&nbsp;Continue with Twitter
                </a>
                <a href="/" class="btn btn-neutral btn-facebook btn-round btn-lg btn-block" style="white-space:nowrap">
                  <i class="fab fa-facebook"></i>&nbsp;Continue with Facebook
                </a>
                <a href="/" class="btn btn-neutral btn-instagram btn-round btn-lg btn-block" style="white-space:nowrap">
                  <i class="fab fa-instagram"></i>&nbsp;Continue with Instagram
                </a>
                <a href="/" class="btn btn-neutral btn-google btn-round btn-lg btn-block">
                  <i class="fab fa-google"></i>&nbsp;Continue with Google
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="http://presentation.creative-tim.com">
                ABOUT US
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Max world servce
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>
