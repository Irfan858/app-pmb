<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint'=> 50,
                'auto_increment' => TRUE,
                'unsigned' => TRUE
            ],
            'role_id' => [
                'type' => 'INT',
                'constraint' => 50,
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'Email' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'Password' => [
                'type' => 'VARCHAR',
                'constraint'=> 128,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATEIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('role_id','tbl_user_role','id');
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user');
    }
}
