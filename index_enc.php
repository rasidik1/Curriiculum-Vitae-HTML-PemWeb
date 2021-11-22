<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Praktikum Pekan 2</title>
    <link rel="stylesheet" href="style.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="metode_enc.js"></script>
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
                <li><a href="buat_cv.php">Buat CV</a></li>
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
                        <tr class="biodata">
                            <td>Kelompok Keahlian</td>
                            <td>:</td>
                            <td>Keamanan Siber dan Persuasif</td>
                        </tr>
                    </table>
                    <img class="fotopropil" width="150px" height="200px" src="assets/fotoku.jpg" />
                </div>
            </main>
            <aside>

                <div class="container">
                    <div class="main">
                        <form method="post" action="index.php" id="form" enctype="multipart/form-data">
                            <h2>Masukkan Saran dan Kritikan Anda</h2>
                            <hr />

                            <label>Nama :</label>
                            <input type="text" name="fnama" id="fnama" />

                            <label>Alamat :</label>
                            <input type="text" name="lalamat" id="lalamat" />

                            <label>Nomor HP :</label>
                            <input type="number" name="hp" id="hp" />

                            <label>Saran :</label>
                            <input type="text" name="saran" id="saran" />

                            <input type="submit" name="submit" id="submit" value="Submit">
                            </for>
                            <?php include "proses_enc.php";?>
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