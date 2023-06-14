<form action="" method="get">

    nama:
    <input type="text" name="Nama">
    alamat:
    <input type="text" name="Alamat">
    <input type="Submit" name="Kirim" value="Simpan">

</form>


<?php

    if (isset($_GET['kirim'])) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
    
        echo $nama;
        echo '<br>';
        echo $alamat; 
    }

  

?>