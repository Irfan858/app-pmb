<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 50,
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
                'comment' => 'id Prodi',
            ],
            'fakultas_id' => [
                'type' => 'INT',
                'constraint' => 50,
                'comment' => 'id Fakultas diambil dari tbl_fakultas',
            ],
            'nama_prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '256',
                'comment' => 'Nama Prodi',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('fakultas_id','tbl_fakultas','id');
        $this->forge->createTable('tbl_prodi');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_prodi');
    }
}
