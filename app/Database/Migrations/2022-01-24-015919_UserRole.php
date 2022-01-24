<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserRole extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '50'
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => '128'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_user_role');
    }

    public function down()
    {
        //Menghapus Tabel User Role
        $this->forge->dropTable('tbl_user_role');
    }
}
