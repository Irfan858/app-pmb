<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederTblUserRole extends Seeder
{
    public function run()
    {
        //List Data
        $data = [
            [
                'id' => 1,
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'role' => 'member'
            ]
        ];

        //Membuat Query
        //$this->db->query("INSERT INTO tbl_user_role (id,role) VALUES (:id:, :role:)", $data);

        //Menggunakan Query Builder Insert
        $this->db->table('tbl_user_role')->insertBatch($data);
    }
}
