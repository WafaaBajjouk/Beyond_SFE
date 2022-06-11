
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('Admin')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <title>{{ config('app.name', 'Bajjouk SFE') }}</title>

  <link href="{{asset('assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">

      <div class="logo">
        <a href="{{ url('chart') }}" class="simple-text logo-mini">
            BS
        </a>
        <a href="{{ url('chart') }}" class="simple-text logo-normal">
            BEYOND SOLUTIONS
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{ url('chart') }}">
              <i  active="" class="now-ui-icons business_chart-bar-32"></i>
              <p>Accueil </p>
            </a>
          </li>
          <hr>


          <li>
            <a href="{{ url('client') }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Les Clients </p>
            </a>
          </li>
          {{-- <hr> --}}

          <li>
            <a href="{{ url('alert') }}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Les Alertes</p>
            </a>
          </li>
          <li>
            <a href="{{ url('abonement') }}">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>Suivie d'abonnement </p>
            </a>
          </li>
          <hr>


          <li>
            <a href="{{ url('text') }}">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Les Textes réglementaires </p>
            </a>
          </li>



          <li>
            <a href="{{ url('csv_file') }}">
              <i class="now-ui-icons arrows-1_cloud-upload-94"></i>
              <p>Importer & Exporter </p>
            </a>
          </li>
          <hr>

          <li>
            <a href="{{ url('reglementation') }}">
              <i class="now-ui-icons ui-2_settings-90"></i>
              <p>Reglementation </p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">Espace Admin</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">

        <form action="{{url('/csv_file/search')}}" method="POST" role="search">
            {{csrf_field()}}

            <div class="input-group no-border">
            <input type="text" name="q" class="form-control" placeholder="Search...">

            <div class="input-group-append">
              <div class="input-group-text">
                <i class="now-ui-icons ui-1_zoom-bold"></i>
              </div>
            </div>
          </div>
        </form>


        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="now-ui-icons media-2_sound-wave"></i>
              <p>
                <span class="d-lg-none d-md-block">Stats</span>
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ "Admin" }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="now-ui-icons users_single-02"></i>
              <p>
                <span class="d-lg-none d-md-block">Account</span>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <!-- End Navbar -->



      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">


        @yield('content')

      </div>





      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="#">
                    Bajjouk wafaa
                </a>
              </li>
              <li>
                <a href="https://github.com/WaffIee">
                 GitHub
                </a>
              </li>
              <li>
                <a href="https://github.com/WaffIee">
                  LinkedIn
                </a>
              </li>
            </ul>
          </nav>

        </div>
      </footer>
    </div>
  </div>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
