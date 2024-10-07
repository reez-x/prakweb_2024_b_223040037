<?php

class About{
    public function index($nama = Rizky, $pekerjaan = "3D artist"){
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}