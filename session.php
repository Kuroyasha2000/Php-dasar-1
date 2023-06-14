<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=Hapus">Hapus</a></li>
        <li><a href="?menu=Destroy">Destroy</a></li>
    </ul>
</nav>

<?php

session_start();

if (isset($_GET['menu'])){
    $menu=$_GET['menu'];

    echo $menu;

    switch ($menu) {
        case 'isi':
            IsiSession();
            break;
        case 'Hapus':
            unset($_SESSION['user']);
            break;
        case 'Destroy':
            session_destroy();
        default:
            # code...
            break;
    }
}

echo '<br>';
var_dump($_SESSION);

function IsiSession(){
 $_SESSION['user'] = 'joni';
$_SESSION['nama']='Joni Rambo';
$_SESSION['alamat']='Sidoarjo';
}



?>