<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulir Surat</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="jp.png" alt="" width="30" height="30" class="mr-3">
            <a class="navbar-brand" href="index.php">SiTu JPOne</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Surat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="suratmasuk.php">Surat Masuk</a>
                            <a class="dropdown-item" href="suratkluar.php">Surat Keluar</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tendik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="guru.php">Guru</a>
                            <a class="dropdown-item" href="tatausaha.php">Tata Usaha</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data Siswa</a>
                            <a class="dropdown-item" href="#">Mutasi Keluar</a>
                            <a class="dropdown-item" href="#">Mutasi Masuk</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            laporan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Surat Masuk</a>
                            <a class="dropdown-item" href="#">Surat Keluar</a>
                            <a class="dropdown-item" href="#">Guru</a>
                            <a class="dropdown-item" href="#">Tata Usaha</a>
                            <a class="dropdown-item" href="#">Data Siswa</a>
                            <a class="dropdown-item" href="#">Mutasi Keluar</a>
                            <a class="dropdown-item" href="#">Mutasi Masuk</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <button type="button" class="btn btn-primary">Masuk</button>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- form guru -->
    <div class="container">
        <h2>Formulir Surat Keluar</h2>
        <div class="dropdown-divider"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="row mb-2">
                        <label class="col-md-2" for="no_agenda">No. Agenda</label>
                        <input type="int" class="form-control col-md-1" id="no_agenda">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-2" for="ditunjukan_kepada">Ditunjukan Kepada</label>
                        <input type="text" class="form-control col-md-7" name="ditunjukan_kepada">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-2" for="no_surat">Nomor Surat</label>
                        <input type="int" class="form-control col-md-7" name="no_surat">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-2" for="tanggal_surat">Tanggal Surat</label>
                        <input type="date" class="form-control col-md-2" name="tanggal_surat">
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2" for="p_i_rngks">Perihal/Isi Ringkas</label>
                        <textarea class="form-control col-md-7" id="exampleFromControlTextareal" rows="3"></textarea>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-2" for="subjek_surat">Subjek Surat</label>
                        <select class="form-control col-lg-7">
                            <option value="#">...</option>
                            <option value="1">Berita Acara</option>
                            <option value="2">Panggilan</option>
                            <option value="3">Pemberitahuan</option>
                            <option value="4">Permohonan</option>
                            <option value="5">Surat Keputusan</option>
                            <option value="6">Surat Keterangan</option>
                            <option value="7">Surat Peringatan</option>
                            <option value="8">Surat Tugas</option>
                            <option value="9">Undangan</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-2" for="keterangan">Keterangan</label>
                        <textarea class="form-control col-md-7" id="exampleFromControlTextareal" rows="4"></textarea>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-3" for="Unggah_Surat">Unggah surat</label>
                    </div>
                    <div>
                        <button type="file"> Choose File </button>
                        <label class="nf_choose">No File Choosen</label>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">SIMPAN</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">BATAL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>