<?php

class Flasher{
    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">DATA MAHASISWA
                    <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';

            unset($_SESSION['flash']);
        }
    }
}