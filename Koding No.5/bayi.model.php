<?php

class bayiModel {
    private $koneksi;

    public function __construct(mysqli $koneksi) {
        $this->koneksi = $koneksi;
    }

    // ambil semua barang
    public function getAll() {
        $sql = "SELECT * FROM data_bayi";
        $rows = $this->koneksi->execute_query($sql, []);
        return $rows;
    }

    // update file
    public function find($id) {
        $sql = "SELECT * FROM profile_member WHERE id_member=?";
        $rows = $this->koneksi->execute_query($sql, [$id])->fetch_assoc();
        return $rows;
    }
    
    public function update($nama, $umur, $tanggal, $roles, $tag, $status, $id) {
        $sql = "UPDATE profile_member SET Nama=?, Umur_akun=?, Tanggal_masuk_server=?, Roles=?, Tag_member=?, status=? WHERE id_member=?";
        $rows = $this->koneksi->execute_query($sql, [$nama, $umur, $tanggal, $roles, $tag, $status, $id]);
        header("location:profile.php");
    }

    // hapus barang

    public function hapus($id){
        $sql = "DELETE FROM data_bayi WHERE id=?";
        $rows = $this->koneksi->execute_query($sql, [$id]) ;
        header("location:bayi.php");
    }
}

