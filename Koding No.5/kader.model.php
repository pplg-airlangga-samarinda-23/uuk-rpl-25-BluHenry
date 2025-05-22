<?php

class kaderModel {
    private $koneksi;

    public function __construct(mysqli $koneksi) {
        $this->koneksi = $koneksi;
    }

    // ambil semua barang
    public function getAll() {
        $sql = "SELECT * FROM data_kader";
        $rows = $this->koneksi->execute_query($sql, []);
        return $rows;
    }
    // edit file
    public function edit($id, $nama, $jenis_kelamin, $umur, $id_anggota ) {
    $update_sql = "UPDATE data_kader SET Nama = '$nama', Jenis_kelamin = '$jenis_kelamin', umur = $umur, id_anggota = $id_anggota WHERE id= $id";
    
    if ($this->koneksi->query($update_sql)) {
        header("Location:kader.php");
        exit;
     } else {
        echo "Error: " . $this->koneksi->error;
        }
    }

    // public function editadmin($id, $nama, $jenis_kelamin, $tinggi_badan, $berat_badan ) {
    // $update_sql = "UPDATE data_bayi SET Nama = '$nama', Jenis_kelamin = '$jenis_kelamin', Tinggi_badan = $tinggi_badan, Berat_badan = $berat_badan WHERE id= $id";
    
    // if ($this->koneksi->query($update_sql)) {
    //     header("Location:bayi.admin.php");
    //     exit;
    //  } else {
    //     echo "Error: " . $this->koneksi->error;
    //     }
    // }
    // update file
    // public function find($id) {
    //     $sql = "SELECT * FROM profile_member WHERE id_member=?";
    //     $rows = $this->koneksi->execute_query($sql, [$id])->fetch_assoc();
    //     return $rows;
    // }
    
    // public function update($nama, $umur, $tanggal, $roles, $tag, $status, $id) {
    //     $sql = "UPDATE profile_member SET Nama=?, Umur_akun=?, Tanggal_masuk_server=?, Roles=?, Tag_member=?, status=? WHERE id_member=?";
    //     $rows = $this->koneksi->execute_query($sql, [$nama, $umur, $tanggal, $roles, $tag, $status, $id]);
    //     header("location:profile.php");
    // }

    // hapus barang

    public function hapus($id){
        $sql = "DELETE FROM data_kader WHERE id=?";
        $rows = $this->koneksi->execute_query($sql, [$id]) ;
        header("location:kader.php");
    }
    // public function hapusAdmin($id){
    //     $sql = "DELETE FROM data_bayi WHERE id=?";
    //     $rows = $this->koneksi->execute_query($sql, [$id]) ;
    //     header("location:bayi.admin.php");
    // }
}

