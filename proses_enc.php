<?php 
if(isset($_POST['fnama']))
{
 $fnama = $_POST['fnama'];
 $lalamat = $_POST['lalamat'];
 $hp = $_POST['hp'];
 $saran = $_POST['saran'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>