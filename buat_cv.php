<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Praktikum Pekan 2</title>
    <link rel="stylesheet" href="style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="metode_cv.js"></script>
</head>

<body>
    <div>
        <header>
            <table>
                <tr>
                    <td>
                        <img width="70px" height="80px" src="assets/logo_itera.jpg" />
                    </td>
                    <td>
                        <h1 class="judul_header">Institut Teknologi Sumatera</h1>
                    </td>
                </tr>
            </table>
        </header>
        <nav>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="index_cv.php">Buat CV</a></li>
                <li><a href="index_enc.php">CV Enskripsi</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
        <div style="display: flex">
            <main>
                <h3>Biodata</h3>
                <div style="display: flex">
                    <table class="tabel_datadiri">
                        <tr class="biodata">
                            <td>Nama lengkap</td>
                            <td>:</td>
                            <td>Rahmad Sidik</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="biodata">
                            <td>NIM</td>
                            <td>:</td>
                            <td>119140096</td>
                        </tr>
                        <tr class="biodata">
                            <td>Kelas</td>
                            <td>:</td>
                            <td>Pemrograman WEB RA</td>
                        </tr>
                        <tr class="biodata">
                            <td>Email</td>
                            <td>:</td>
                            <td>rahmad.119140096@student.itera.ac.id</td>
                        </tr>
                        <tr class="biodata">
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Sidomulyo, Lampung Selatan</td>
                        </tr>
                        <tr>
                            <td>Kelompok Keahlian</td>
                            <td>:</td>
                            <td class="biodata">echo "Nama : ".$fnama."<br />Alamat : ".$lalamat;</td>
                        </tr>
                    </table>
                    <img class="fotopropil" width="150px" height="200px" src="assets/fotoku.jpg" />
                </div>
            </main>
            <aside>

                <div class="container">
                    <div class="main">
                        <form method="get" action="index.php" id="form">
                            <h2>Masukkan Biodata Anda</h2>
                            <hr />

                            <label>Nama Lengkap :</label>
                            <input type="text" name="fnama" id="fnama" />

                            <label>NIM :</label>
                            <input type="text" name="nim" id="nim" />

                            <label>Kelas :</label>
                            <input type="text" name="kelas" id="kelas" />

                            <label>Email :</label>
                            <input type="email" name="email" id="email" />

                            <label>Alamat :</label>
                            <input type="text" name="alamat" id="alamat" />

                            <label>Kelompok Keahlian :</label>
                            <input type="text" name="kk" id="kk" />

                            <label>Pilih Metode :</label>
                            <span><input type="radio" name="method" value="get" checked> GET
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="method" value="post"> POST </span>

                            <input type="submit" name="submit" id="submit" value="Submit">
                            </for>
                            <?php include "proses_cv.php";?>
                    </div>
                </div>
            </aside>
        </div>
        <div id="about">
            <footer>
                <p align="center">
                    @copyright 2021 <br />
                    Rahmad Sidik - 119140096 <br />
                    Teknik Informatika <br />
                    Institut Teknologi Sumatera <br />
                </p>
            </footer>
        </div>
    </div>
</body>

</html>