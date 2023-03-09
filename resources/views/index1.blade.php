<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Food & Beverage</title>
        <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css"/>
        <link rel="stylesheet" href="{{ asset('assets/a/css/styles.css') }}" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Smart Hotel</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#event">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pengunjung">Pengunjung</a></li>
                        <li class="nav-item"><a class="nav-link" href="/">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Food & Beverage</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Selamat Datang di Website Food & Beverage. Disini kita menyediakan layanan makanan untuk Smart Hotel ini, Silahkan pilih pesanan anda</p>
                        <a class="btn btn-primary btn-xl" href="#event">Pesanan Event</a>
                        <br/>
                        <br/>
                        <a class="btn btn-primary btn-xl" href="#pengunjung">Pesanan Pengunjung</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="page-section bg-primary" id="event">
            <div class="container-fluid">
                <div class="justify-content-center">
                    <div class="text-center">
                        <h2 class="text-white mt-0">Menu Paket</h2>
                        <hr class="divider divider-light" />
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                    <h4 class="card-title "> </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table width="100%" class="table table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                    <th>Nomor</th>
                                                    <th>Nama Paket</th>
                                                    <th>Isi Paket</th>
                                                    <th>Harga</th>
                                                    <th> </th>
                                                    </tr>
                                                    <?php $no=1; ?>
		                                            @foreach ($pakets as $data)
		                                            <tr>
			                                        <td>{{ $no++ }}</td>
			                                        <td>{{ $data->nama_paket }}</td>
                                                    <td>{{ $data->isi_paket }}</td>
                                                    <td>{{ $data->harga }}</td>
			                                        <td><a class="btn btn-primary" href="transaksievent/{{ $data -> id_paket }}">Beli</a></td>
		                                            </tr>
		                                            @endforeach
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="pengunjung">
            <div class="content">
                <div class="container-fluid">
                <h2 class="text-center mt-0">Menu Makanan</h2>
                <hr class="divider" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                <h4 class="card-title "> </h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                <th>Nomor</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th> </th>
                                                </tr>
                                                <?php $no=1; ?>
		                                        @foreach ($menus as $data1)
		                                        <tr>
			                                    <td>{{ $no++ }}</td>
			                                    <td>{{ $data1->nama_menu }}</td>
                                                <td>{{ $data1->harga }}</td>
			                                    <td><a class="btn btn-primary" href="transaksipengunjung/{{ $data1 -> id_menu }}">Beli</a></td>
		                                        </tr>
		                                        @endforeach
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Kelompok 8 Food & Beverage</div></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('assets/a/js/scripts.js') }}"></script>
    </body>
</html>