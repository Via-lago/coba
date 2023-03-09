<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Food & Beverage</title>
  <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" class="btn btn-neutral btn-icon">
          <span class="btn-inner--icon">
            <i class="fas fa-shopping-cart mr-2"></i>
          </span>
          <span class="nav-inner--text">Food & Beverage</span>
        </a>
      </div>
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                <i class="ni ni-tv-2 text-default"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewmenu">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewpaket">
                <i class="ni ni-delivery-fast text-default"></i>
                <span class="nav-link-text">Paket</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewkaryawan">
                <i class="ni ni-satisfied text-default"></i>
                <span class="nav-link-text">Karyawan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewdapur">
                <i class="ni ni-shop text-default"></i>
                <span class="nav-link-text">Bahan Baku</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/viewevent">
                <i class="ni ni-box-2 text-default"></i>
                <span class="nav-link-text">Pesanan Event</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/viewpengunjung">
                <i class="ni ni-bag-17 text-primary"></i>
                <span class="nav-link-text">Pesanan Pengunjung</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="/index1" class="dropdown-item">
                  <i class="ni ni-world"></i>
                  <span>Web Browser</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/login" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Pesanan Pengunjung</h3>
            </div>
            <div class="card-body">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                    <tr>
                    <th>Nomor</th>
                    <th>ID Pengunjung</th>
                    <th>ID Menu</th>
                    <th>Nama Pengunjung</th>
                    <th>Jenis Pengunjung</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                    <?php $no=1; ?>
                    @foreach ($pengunjungs as $data)
                    <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id_pengunjung }}</td>
                    <td>{{ $data->id_menu }}</td>
                    <td>{{ $data->nama_pengunjung }}</td>
                    <td>{{ $data->jenis_pengunjung }}</td>
                    <td>{{ $data->nama_menu }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td><a class="btn btn-warning" href="/editpengunjung/{{ $data->id_pengunjung }}"><i class="fas fa-edit"></i></a> <a class="btn btn-danger" href="/deletepengunjung/{{ $data->id_pengunjung }}"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
		                @endforeach
                </thead>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled"></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a class="font-weight-bold ml-1" target="_blank">Kelompok 8 Food & Beverage</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>