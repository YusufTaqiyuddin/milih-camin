<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class M_user extends Load
{
    private $table = 'user';
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

    public function checkUser($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user=?');
        $this->db->bind(1, $data['user']);
        return $this->db->single();
    }

    public function voting($data)
    {
        $this->db->query('UPDATE ' . $this->table . ' set pilihan=?, status=? WHERE id=?');
        $this->db->bind(1, $data['id_camin']);
        $this->db->bind(2, 'Sudah');
        $this->db->bind(3, $data['id']);

        return $this->db->execute();
    }

    public function importuser($files)
    {
        $spreadsheet = IOFactory::load($files['import']['tmp_name']);
        $data = $spreadsheet->getActiveSheet()->toArray();
        // die(var_dump($data));
        
        $this->db->query('TRUNCATE TABLE '.$this->table);
        $this->db->execute();

        $this->db->query('INSERT INTO ' . $this->table . ' (nama, nim, user, pass, email, status, pilihan) VALUES (?,?,?,?,?,?,?)');
    
        $data_user = [
            ['panitia', 'panitia', 'panitia', 'panitia', 'panitia', 'Sudah', 99],
        ];

        $chars = '0123456789abcdefghijkmnopqrstuvwxyz';

        foreach ($data as $item) {
            $barisbaru = [
                $item[1], 
                $item[2], 
                substr(preg_replace('/[\d\s.,-]+/', '', strtolower($item[1])), 0, 4).
                '_'.substr(str_shuffle($chars), 0, 4),
                'pass_'.substr(str_shuffle($chars), 0, 4), 
                $item[3], 
                'Belum', 
                0
            ];

            array_push($data_user, $barisbaru);
        }
        
        // $this->db->query('TRUNCATE TABLE '.$this->table);
        // $this->db->execute();

        // $this->db->query('INSERT INTO ' . $this->table . ' (nama, nim, user, pass, email, status, pilihan) VALUES (?,?,?,?,?,?,?)');

        // $data_user = [
        //     ['panitia', 'panitia', 'panitia', 'panitia', 'panitia', 'Sudah', 99],
        // ];

        // $chars = '0123456789abcdefghijkmnopqrstuvwxyz';

        // for ($i = 2; $i <= $jumlahbaris; $i++) {
        //     $isi_excel = [
        //         $data->val($i, 3),
        //         $data->val($i, 4),
        //         substr(preg_replace('/[\d\s.,-]+/', '', strtolower($data->val($i, 3))), 0, 4).
        //         '_'.substr(str_shuffle($chars), 0, 4),
        //         'pass_'.substr(str_shuffle($chars), 0, 4),
        //         $data->val($i, 2),
        //         'Belum',
        //         0

        //     ];

        //     array_push($data_user, $isi_excel);
        // }

        $this->db->insertMultiple($data_user);

        return $data_user;
    }

    public function importuser_old($files)
    {
        $this->libraries('excel_reader2');

        $data = new Spreadsheet_Excel_Reader($files['import']['tmp_name'], false);
        $jumlahbaris = $data->rowcount($sheet_index = 0);

        $this->db->query('TRUNCATE TABLE '.$this->table);
        $this->db->execute();

        $this->db->query('INSERT INTO ' . $this->table . ' (nama, nim, user, pass, email, status, pilihan) VALUES (?,?,?,?,?,?,?)');

        $data_user = [
            ['panitia', 'panitia', 'panitia', 'panitia', 'panitia', 'Sudah', 99],
        ];

        $chars = '0123456789abcdefghijkmnopqrstuvwxyz';

        for ($i = 2; $i <= $jumlahbaris; $i++) {
            $isi_excel = [
                $data->val($i, 3),
                $data->val($i, 4),
                substr(preg_replace('/[\d\s.,-]+/', '', strtolower($data->val($i, 3))), 0, 4).
                '_'.substr(str_shuffle($chars), 0, 4),
                'pass_'.substr(str_shuffle($chars), 0, 4),
                $data->val($i, 2),
                'Belum',
                0

            ];

            array_push($data_user, $isi_excel);
        }

        $this->db->insertMultiple($data_user);

        return $data_user;
    }

    public function adduser($data)
    {           
        $chars = '0123456789abcdefghijkmnopqrstuvwxyz';
        $user = substr(preg_replace('/[\d\s.,-]+/', '', strtolower($data['nama'])), 0, 4).
        '_'.substr(str_shuffle($chars), 0, 4);
        $pass = 'pass_'.substr(str_shuffle($chars), 0, 4);

        $this->db->query('INSERT INTO ' . $this->table . ' (nama, nim, user, pass, email, status, pilihan) VALUES (?,?,?,?,?,?,?)');
        $this->db->bind(1, $data['nama']);
        $this->db->bind(2, $data['nim']);
        $this->db->bind(3, $user);
        $this->db->bind(4, $pass);
        $this->db->bind(5, $data['email']);
        $this->db->bind(6, 'Belum');
        $this->db->bind(7, 0);
        
        $this->db->execute();
    }
}
