<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fakultas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
                'comment' => 'id fakultas',
            ],
            'nama_fakultas' => [
                'type' => 'VARCHAR',
                'constraint' => '256',
                'comment' => 'Nama Fakultas',
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_fakultas');
    }
}
