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
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <header class="section-header">
                            <h3 class="section-title"> </h3>
                        </header>
                        <div class="form">
                        @foreach($pakets as $data)
                            <form action="/formbuyevent" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="id_menu">ID Paket</label>
                                    <input type="text" class="form-control" name="id_paket" id="id_paket" value="{{ $data->id_paket }}" readonly required/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nama_pengunjung">Nama Event</label>
                                    <input type="text" class="form-control" name="nama_event" id="nama_event"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="jenis_pengunjung">Nama Pengelola</label>
                                    <input type="text" class="form-control" name="nama_pengelola" id="nama_pengelola"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nama_menu">Isi Paket</label>
                                    <input type="text" class="form-control" name="isi_paket" id="isi_paket" value="{{ $data->isi_paket }}" readonly required/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="total_harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga" value="{{ $data->harga }}" readonly required/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="bayar_jual">Bayar</label>
                                    <input type="number" class="form-control" name="bayar" id="bayar" onkeyup="totalharga();"/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="jumlah_bahan">Kembalian</label>
                                    <input type="number" class="form-control" name="kembalian" id="kembalian" readonly required/>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" value="Beli" class="btn btn-success">
                                    <input type="reset" value="Batal" class="btn btn-danger">
                                    <a class="btn btn-primary" href="/index1">Kembali</a>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        <script>
            function totalharga()
            {
                var harga = document.getElementById('harga').value;
                var bayar = document.getElementById('bayar').value;
                var kembalian = parseInt(bayar) - parseInt(harga);
                document.getElementById('kembalian').value = kembalian;
            }
        </script>
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