<?php
class Mahasiswa_model{
    //database handler
    private $dbh;
    private $stmt;

    public function __construct(){
        //data source name
        $dsn ='mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMassage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "ABC",
    //         "nrp" => "123",
    //         "email" => "abc@gmail.com",
    //         "jurusan" => "bc"
    //     ],
    //     [
    //         "nama" => "DEF",
    //         "nrp" => "456",
    //         "email" => "def@gmail.com",
    //         "jurusan" => "ef"
    //     ],
    //     [
    //         "nama" => "GHI",
    //         "nrp" => "789",
    //         "email" => "hgi@gmail.com",
    //         "jurusan" => "hi"
    //     ]
    // ];

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}