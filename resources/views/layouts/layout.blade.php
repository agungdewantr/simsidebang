<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>
  <link rel="icon" href="{!! asset('assets/img/logo.png')!!}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{!! asset('node_modules/jqvmap/dist/jqvmap.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('node_modules/weathericons/css/weather-icons.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('node_modules/weathericons/css/weather-icons-wind.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('node_modules/summernote/dist/summernote-bs4.css')!!}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/css/components.css') !!}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{!! asset('assets/img/avatar/avatar-1.png') !!}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{auth()->user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="dropdown-item has-icon text-danger" style="outline:none;"><i class="fas fa-sign-out-alt"></i><h6 class="small">Logout</h6></button>
              </form>

            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">SIM UD. Sidebang</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"><img src="{!! asset('assets/img/logo.png')!!}" alt="logo" width="40 px"></a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/')}}">Prediksi</a></li>
                </ul>
              </li>
              @if(auth()->user()->role == 'pegawai')
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Sayuran</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="{{ url('/kelolahargabeli') }}">Kelola Harga Beli Sayur</a></li>
                  <li><a class="nav-link" href="{{ url('/kelolahargajual') }}">Kelola Harga Jual Sayur</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kelola Transaksi</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="{{ url('/sayurmasuk') }}">Kelola Transaksi Masuk</a></li>
                  <li><a class="nav-link" href="{{ url('/sayurkeluar') }}">Kelola Transaksi Keluar</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kelola Keuangan</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="/keuangan">Omzet</a></li>
                </ul>
              </li>
              @endif
              @if(auth()->user()->role == 'pemilik')
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Rekap Transaksi</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="{{ url('/sayurmasuk') }}">Rekap Transaksi Masuk</a></li>
                  <li><a class="nav-link" href="{{ url('/sayurkeluar') }}">Rekap Transaksi Keluar</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kelola Keuangan</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="/keuangan">Omzet & Keuntungan</a></li>
                </ul>
              </li>
              @endif
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('namahalaman')</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>
          @yield('datastok')
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>@yield('title')</h4>
              </div>
              <div class="card-body">
                <div class="">
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"> PPL C - Kelompok E
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="{!! asset('assets/js/stisla.js')!!}"></script>

  <!-- JS Libraies -->
  <script src="{!! asset('node_modules/simpleweather/jquery.simpleWeather.min.js')!!}"></script>
  <script src="{!! asset('node_modules/chart.js/dist/Chart.min.js')!!}"></script>
  <script src="{!! asset('node_modules/jqvmap/dist/jquery.vmap.min.js')!!}"></script>
  <script src="{!! asset('node_modules/jqvmap/dist/maps/jquery.vmap.world.js')!!}"></script>
  <script src="{!! asset('node_modules/summernote/dist/summernote-bs4.js')!!}"></script>
  <script src="{!! asset('node_modules/chocolat/dist/js/jquery.chocolat.min.js')!!}"></script>

  <!-- Template JS File -->
  <script src="{!! asset('assets/js/scripts.js')!!}"></script>
  <script src="{!! asset('assets/js/custom.js')!!}"></script>
  <script src="{!! asset('assets/js/page/bootstrap-modal.js') !!}"></script>
  <!-- Page Specific JS File -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@yield('autocomplete')
</div>
</body>
</html>
