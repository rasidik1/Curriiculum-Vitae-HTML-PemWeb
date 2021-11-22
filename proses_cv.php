<?php 
if(isset($_POST['fnama']))
{
 $fnama = $_POST['fnama'];
 $alamat = $_POST['alamat'];
 $email = $_POST['email'];
 $kk = $_POST['kk'];
 $nim = $_POST['nim'];
 $kelas = $_POST['kelas'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
 $fnama = $_GET['fnama'];
 $alamat = $_GET['alamat'];
 $email = $_GET['email'];
 $kk = $_GET['kk'];
 $nim = $_GET['nim'];
 $kelas = $_GET['kelas'];
 echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>