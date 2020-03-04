<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulir</title>
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


<body>
    <!-- form guru -->
    <div class="container">
        <h2>Formulir Tenaga Pendidik</h2>
        <div class="dropdown-divider"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="row mb-2">
                        <label class="col-md-4" for="no_induk">No. Induk Pegawai</label>
                        <input type="int" class="form-control col-md-2" id="no_induk">

                        <label class="col-md-3" for="kd_guru">Kode Guru</label>
                        <input type="text" class="form-control col-md-2" id="kd_guru">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="nama_guru">Nama Guru</label>
                        <input type="text" class="form-control col-md-7" id="nama_guru">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="tugas_tambahan">Tugas Tambahan</label>
                        <select class="custom-select col-md-7" id="inlineFormCustomSelectPref">
                            <option selection>...</option>
                            <option value="1">Kepala Sekolah</option>
                            <option value="2">Wakil Kepala Sekolah</option>
                            <option value="3">Pembina Osis</option>
                            <option value="4">Koordinator Kantin</option>
                            <option value="5">Koordinator GSPro</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="nuptik">NUPTIK</label>
                        <input type="int" class="form-control col-md-7" id="nuptik">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="tempat_lahir">Tempat Lahir</label>
                        <input type="int" class="form-control col-md-7" id="tempat_lahir">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control col-md-7" id="tanggal_lahir">
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="jenis_kelamin">Jenis Kelamin</label>
                        <label class="col-md-7">
                            <input class="col-md-1" type="radio" name="jenis_kelamin" value="P" />Perempuan
                            <input class="col-md-1" type="radio" name="jenis_kelamin" value="L" />Laki-laki
                        </label>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="agama">Agama</label>
                        <select class="form-control custom-select col-md-7" id="inlineFormCustomSelectPrerf">
                            <option selection>...</option>
                            <option value="1">Islam</option>
                            <option value="2">Kristen Protestan</option>
                            <option value="3">Kristen Katolik</option>
                            <option value="4">Hindu</option>
                            <option value="5">Budha</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-4" for="alamat">Alamat</label>
                        <textarea class="form-control col-md-7" id="exampleFromControlTextareal" rows="3"></textarea>
                    </div>
                    <div class="row mb-2">
                        <label class="col-md-3" for="Unggah_Surat">Unggah Foto</label>
                    </div>
                    <div>
                        <button type="file"> Choose File </button>
                        <label class="nf_choose">No File Choosen</label>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">SIMPAN</button>
                        </div>
                    </div>
            </div>

            <div class="col">
                <div class="row mb-2">
                    <label class="col-md-4" for="no_hp">No Handphone</label>
                    <input type="text" class="form-control col-md-7" id="no_hp">
                </div>
                <div class="row mb-2">
                    <label class="col-md-4" for="email">Email</label>
                    <input type="text" class="form-control col-md-7" id="email">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="pt">Pendidikkan Terakhir</label>
                    <select class="form-control col-md-2" id="pt">
                        <option value="">...</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select><br>

                    <label class="col-md-3" for="th_ls">Tahun Lulus</label>
                    <input type="text" class="form-control col-md-2" Id="th_ls">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="js">Jurusan</label>
                    <input type="text" class="form-control col-md-7" id="js">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="Tmt">TMT di sekolah ini</label>
                    <input type="date" class="form-control col-md-7" name="Tmt">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="Status">Status Pegawai</label>
                    <select class="form-control col-md-7" id="Status">
                        <option value="">...</option>
                        <option value="Guru Tetap yayasan">Guru Tetap Yayasan</option>
                        <option value="Guru Tidak Tetap">Guru Tidak Tetap</option>
                    </select><br>
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="ibu_kandung">Nama Ibu Kandung</label>
                    <input type="text" class="form-control col-md-7" name="ibu_kandung">
                </div>

                <div class="row mb-2">
                    <label class="col-md-4" for="mapel">Mata Pelajaran</label>
                    <input type="text" class="form-control col-md-7" name="mapel">
                <div class="col">
                    <button type="submit" class="btn btn-primary mb-3 mt-3 ml-5">BATAL</button>
                </div>
            </div>
            </form>
        </div>
    </div>

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