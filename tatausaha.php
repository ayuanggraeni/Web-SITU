<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tata Usaha</title>
</head>

<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="project.html">
                <img src="jp.png" width="30" height="30" alt="" class="mr-3">SiTu JPOne</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Surat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="suratmasuk.html">surat masuk</a>
                            <a class="dropdown-item" href="suratkeluar.html">surat keluar</a>
                            <div class="dropdown-divider"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tendik
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="guru.php">Guru</a>
                            <a class="dropdown-item" href="tatausah.php">Tata Usaha</a>
                            <div class="dropdown-divider"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kesiswaan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data Siswa</a>
                            <a class="dropdown-item" href="#">Mutasi Keluar</a>
                            <a class="dropdown-item" href="#">Mutasi Masuk</a>
                            <div class="dropdown-divider"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laporan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="suratmasuk.html">Surat Masuk</a>
                            <a class="dropdown-item" href="suratkeluar.html">Surat Keluar</a>
                            <a class="dropdown-item" href="#">Guru</a>
                            <a class="dropdown-item" href="#">Tata Usaha</a>
                            <a class="dropdown-item" href="#">Data Siswa</a>
                            <a class="dropdown-item" href="#">Mutasi Keluar</a>
                            <a class="dropdown-item" href="#">Mutasi Masuk</a>
                            <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary">Masuk</button>
                    </li>
                </ul>
            </div>
</nav>

    <body>
    <!-- form tatausaha -->
    <div class="container">
    <h2>Formulir Tata Usaha</h2>
    <form>
    <div class="dropdown-divider"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                    <div class="row mb-2">
                        <label class="col-md-4" for="no_induk">No.Induk Pegawai</label>
                        <input type="int" class="form-control col-md-7" id="no_induk">
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="kd_pegawai">kode Pegawai</label>
                        <input type="int" class="form-control col-md-7" id="kd_pegawai">
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="nama">Nama</label>
                        <input type="int" class="form-control col-md-7" id="nama">
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="jabatan">Jabatan</label>
                        <select class="form-control col-md-7" name="jabatan">
                            <option value=""></option>
                            <option value="kepala_tata_usaha">Kepala Tata Usaha</option>
                            <option value="bendahara">Bendahara</option>
                            <option value="staf_admin">Staf Administrasi</option>
                            <option value="staf_kesiswaan">Staf Kesiswaan</option>
                            <option value="pustakawan">Pustakawan</option>
                            <option value="staf_keamanan">Staf Keamanan</option>
                            <option value="caraka">Caraka</option>
                        </select>
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="nuptk">NUPTK</label>
                        <input type="text" class="form-control col-md-7" id="nuptk">
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="tempat_lahir">Tempat Lahir</label>
                        <input type="int" class="form-control col-md-7" id="tempat_lahir">
                    </div>

                    <div class="row mb-2">
                        <label class="col-md-4" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control col-md-7" id="tanggal_lahir">
                    </div>

                    <div>
                        <label class="col-md-4" for="unggah_surat">Unggah Surat</label>
                        <button type="submit">Choose file</button>
                        <label for="No file choose">No file choose</label><br>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">SIMPAN</button>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="row mb-2">
                        <label class="col-md-4" for="jenis_kelamin">Jenis Kelamin</label>
                        <label class="col-md-7">
                            <input class="col-md-1" type="radio" name="jenis_kelamin" value="P" />Perempuan
                            <input class="col-md-1" type="radio" name="jenis_kelamin" value="L" />Laki-laki
                        </label>
                <div>

               <div class="row mb-2">
                    <label class="col-md-4" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    <input type="text" class="form-control col-md-7" id="pendidikan_terakhir">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="jurusan">Jurusan</label>
                    <select class="form-control col-md-7">
                        <option value=""></option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="smk">SMK</option>
                        <option value="s1">S1</option>
                    </select>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="tahun_lulus">Tahun Lulus</label>
                    <input type="text" class="form-control col-md-7" id="tahun_lulus">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="TMT_di_sekolah">TMT di Sekolah Ini</label>
                    <input type="text" class="form-control col-md-7" id="TMT_di_sekolah">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="stts_pegawai">Status Pegawai</label>
                    <input type="text" class="form-control col-md-7" id="stts_pegawai">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="nm_ibu_kndng">Nama Ibu Kandung</label>
                    <input type="text" class="form-control col-md-7" id="nm_ibu_kndng">
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">BATAL</button>
                </div>

            </div>

            </form>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
</body>

</html>