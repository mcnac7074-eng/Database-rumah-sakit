<?php
class Pasien {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM pasien");
    }

    public function getById($id) {
        $id = (int)$id;
        return $this->conn->query("SELECT * FROM pasien WHERE id=$id");
    }

    public function create($nama, $alamat, $penyakit, $dokter) {
        $nama     = $this->conn->real_escape_string($nama);
        $alamat   = $this->conn->real_escape_string($alamat);
        $penyakit = $this->conn->real_escape_string($penyakit);
        $dokter   = $this->conn->real_escape_string($dokter);
        return $this->conn->query(
            "INSERT INTO pasien (nama, alamat, penyakit, dokter)
             VALUES ('$nama', '$alamat', '$penyakit', '$dokter')"
        );
    }

    public function update($id, $nama, $alamat, $penyakit, $dokter) {
        $id       = (int)$id;
        $nama     = $this->conn->real_escape_string($nama);
        $alamat   = $this->conn->real_escape_string($alamat);
        $penyakit = $this->conn->real_escape_string($penyakit);
        $dokter   = $this->conn->real_escape_string($dokter);
        return $this->conn->query(
            "UPDATE pasien SET nama='$nama', alamat='$alamat',
             penyakit='$penyakit', dokter='$dokter' WHERE id=$id"
        );
    }

    public function delete($id) {
        $id = (int)$id;
        return $this->conn->query("DELETE FROM pasien WHERE id=$id");
    }
}
?>
