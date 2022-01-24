<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Informasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '50',
                'auto_increment' => TRUE,
                'unsigned' => TRUE,
            ],
            'tgl_buka' => [
                'type' => 'DATE',
                'comment' => 'Tanggal Pembukaan Pendaftaran',
            ],
            'tgl_tutup' => [
                'type' => 'DATE',
                'comment' => 'Tanggal Tutup Pendaftaran',
            ],
            'tgl_pengumuman' => [
                'type' => 'DATE',
                'comment' => 'Tanggal Pengumuman Lulus administrasi',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tbl_informasi');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_informasi');
    }
}
