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
  <link href="/assets/css/all.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="400">
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
      <div class="collapse navbar-collapse justify-content-end" data-nav-image="/assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <p>SIGN UP</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">
              <p>LOG IN</p>
            </a>
          </li>
          <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <span class="account-user-avatar">
                <img src="/assets/img/julie.jpg" alt="user-image" class="rounded-circle" style="width:30px;">
              </span>
              <span>
                <span class="account-user-name">Nickname</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
              <a href="/" class="dropdown-item notify-item">
                <i class="now-ui-icons users_circle-08"></i>
                <span>MY PAGE</span>
              </a>
              <a href="/" class="dropdown-item notify-item">
                <i class="fas fa-baby"></i>
                <span>HOW TO</span>
              </a>
              <a href="/" class="dropdown-item notify-item">
                <i class="now-ui-icons ui-1_settings-gear-63"></i>
                <span>SETTINGS</span>
              </a>
              <a href="/" class="dropdown-item notify-item">
                <i class="far fa-angry"></i>
                <span>LOG OUT</span>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" onclick="javascript:$('.forms').hide();$('#comment').fadeToggle();">
              <i class="far fa-comment-dots fa-2x"></i>
            </a>
          </li>
          <li id="comment" class="forms" style="display:none;color:black;">
            <div class="input-group">
              <input type="text" class="form-control" maxlength="10" style="border: 1px solid white;">
                <button type="button" href="/" class="clear-decoration" style="border: 1px solid white;color:white;"><i class="far fa-paper-plane"></i></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <!-- 非ログイン者に表示 -->
    <!-- <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="./assets/img/now-logo.png" alt="">
        </div>
      </div>
    </div> -->
    <!-- End 非ログイン者に表示 -->
    <!-- login ver -->
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/assets/img/julie.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="/assets/img/julie.jpg" alt="Thumbnail Image" class="rounded-circle img-raised" style="width:15%;">
        </div>
        <h3 class="title">Nickname</h3>
        <p class="category">Anytime瑞穂通店</p>
        <div class="content">
          <div class="social-description">
            <h7>ジムフレ</h7>
            <p>100</p>
            <div class="talk float-right">
              <div class="talk_left">
                <p>今、瑞穂店にいます！</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End login ver -->
  <div class="main">
    <div class="section">
      <div class="container">
        <div class="title">
          <h3 class="title text-center">This Week Pickup ジムフレ</h3>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block" src="assets/img/header.jpg" alt="First slide ユーザーがマイページに登録している動画を表示">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Nickname A BEST PIC</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/header.jpg" alt="Second slide ユーザーがマイページに登録している動画を表示">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Nickname B BEST PIC</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/header.jpg" alt="Third slide ユーザーがマイページに登録している動画を表示">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Nickname C BEST PIC</h5>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="space-100"></div>
        <div class="section section-basic" style="background-image:url('/assets/img/blurred-image-1.jpg');box-shadow: 10px 10px 10px rgba(0,0,0,0.6);">
          <div class="container">
            <h3 class="title text-center">MY ジムフレ</h3>
            <div class="row text-center">
              <div class="col-md-2 col-md-offset-5">
                <div class="category">
                  <a href="/" style="text-decoration:none;color:black;">
                    <img src="/assets/img/julie.jpg" alt="Thumbnail Image" class="rounded-circle img-raised" style="width:40px;height:40px;">
                    Nickname
                  </a>
                  <div class="talk mt-2">
                    <div class="talk_left">
                      <p>今、瑞穂店にいます！</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space-50"></div>
        <div class="section section-basic" style="background-image:url('/assets/img/blurred-image-1.jpg');box-shadow: 10px 10px 10px rgba(0,0,0,0.6);">
          <div class="container">
            <h3 class="title text-center">MY GYM</h3>
            <div class="row text-center">
              <div class="col-md-2 col-md-offset-5">
                <div class="category">
                  <a href="/" style="text-decoration:none;color:black;">
                    <img src="/assets/img/julie.jpg" alt="Thumbnail Image" class="rounded-circle img-raised" style="width:40px;height:40px;">
                    テストGYM
                  </a>
                  <div class="float-center mt-2 ml-2">
                    <div class="talk">
                      <div class="talk_left">
                        <p>今、5名トレ中です！</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-2">
              <a class="btn btn-dark mb-1" data-background-color="black" href="javascript:void(0);" onclick="javascript:$('.forms').hide();$('#search').fadeToggle();">SEACH GYM</a>
            </div>
            <div id="search" class="forms mt-3" style="display:none;color:black;">
              <div class="card" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.6);">
                <div class="card-body">
                  <h4>SEACH GYM</h4>
                    <div class="row">
                      <div class="col-sm-6 col-lg-3">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-dumbbell"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="例：テスト店">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-dark" onclick="">SERCH</button>
                    <button type="button" class="btn btn-dark" onclick="javascript:$('#search').fadeOut();">CLOSE</button>
                    <!-- <input type="hidden" name="execute" value="on"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="space-50"></div>
    <div class="section" data-background-color="black">
      <div class="container">
        <h3 class="text-center">ジムフレ運営のMAXとMASAOからYOUに格言を。</h3>
        <div class="row justify-content-md-center sharing-area text-center">
          <div class="text-center col-md-12 col-lg-8">
            <h3>There are no shortcuts.<br>
              The fact that a shortcut is important to you means that you are a pussy.<br><br>
            </h3>
          </div>
          <div class="text-center col-md-12 col-lg-8">
            <a target="_blank" href="https://twitter.com/coxcoa2" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="YOUの格言を今すぐDMだ!!">
              <i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="/" class="btn btn-neutral btn-icon btn-instagram btn-round btn-lg" rel="tooltip" title="YOUの格言を今すぐDMだ!!">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="/">
                ABOUT US
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
  $('#continuous-tip').tooltip('show');
  </script>

</body>

</html>
