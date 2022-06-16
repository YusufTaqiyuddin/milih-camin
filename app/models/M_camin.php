<?php

class M_camin extends Load
{
    private $table = 'camin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function edit($data, $file)
    {
        $foto = $this->_uploadImage($file, 'camin-'.$data['id'], $data['foto-old']);
        $this->db->query('UPDATE ' . $this->table . ' set nama=?, visi=?, misi=?, foto=? WHERE id=?');
        $this->db->bind(1, $data['nama']);
        $this->db->bind(2, $data['visi']);
        $this->db->bind(3, $data['misi']);
        $this->db->bind(4, $foto);
        $this->db->bind(5, $data['id']);

        return $this->db->execute();
    }

    private function _uploadImage($file, $nama, $default=null)
    {
        $namaFile = $file['foto']['name'];
        $namaSementara = $file['foto']['tmp_name'];

        $ext = explode('.', $namaFile);
        $namaFile = $nama.'.'.$ext[1];

        $dirUpload = BASEAPP."public/assets/img/";

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

        if ($terupload) {
            return $namaFile;
        } else {
            return $default;
        }
    }
}
