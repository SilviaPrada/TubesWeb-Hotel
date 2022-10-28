<?php
class Kamar{
    var $koneksi;
    var $base_url;
    var $table='datakamar';
 
    function __construct($koneksi, $base_url){
        $this->koneksi=$koneksi;
        $this->base_url=$base_url;
    }
   
    function getAllData(){
        $no = 0;
        $data = mysqli_query($this->koneksi,"SELECT * FROM $this->table ORDER BY RAND()");
        while($d = mysqli_fetch_array($data)){
            $result[$no]=$d;
            $no++;
        }
        return $result;
    }

    function getAllDataSort(){
        $no = 0;
        $data = mysqli_query($this->koneksi,"SELECT * FROM $this->table ORDER BY idkamar");
        while($d = mysqli_fetch_array($data)){
            $result[$no]=$d;
            $no++;
        }
        return $result;
    }

    function getData($jumlah){
        $no = 0;
        $data = mysqli_query($this->koneksi,"SELECT * FROM $this->table ORDER BY RAND() LIMIT $jumlah");
        while($d = mysqli_fetch_array($data)){
            $result[$no]=$d;
            $no++;
        }
        return $result;
    }

    function getDataById($idKamar){
        $no = 0;
        $data = mysqli_query($this->koneksi,"SELECT * FROM $this->table WHERE idKamar = $idKamar");
        while($d = mysqli_fetch_array($data)){
            $result[$no]=$d;
            $no++;
        }
        return $result;
    }
 
    function getRupiahFormat($angka){
        $result = "".number_format($angka,2,',','.');
        return $result;
    }
}
?>