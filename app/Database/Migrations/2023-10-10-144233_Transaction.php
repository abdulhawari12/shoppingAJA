<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
    public function up()
    {
        $this->forge->addField([
          'id' => [
            'type' => 'int',
            'usigned' => true,
            'auto_increment' => true,
            'constraint' => 11
            ],
          'users_id' => [
             'type' => 'int',
             'usigned' => true,
             'constraint' => 11
            ],
          'nama_transaksi' => [
             'type' => 'varchar',
             'constraint' => 255,
            ],
          'tgl_transaksi' => [
             'type' => 'datetime',
            ],
          'saldo_masuk' => [
            'type' => 'double',
            'default' => 0
            ],
          'saldo_keluar' => [
            'type' => 'double',
            'default' => 0
            ],
          'created_at' => [
             'type' => 'datetime',
             'null' => true
            ],
          'updated_at' => [
             'type' => 'datetime',
             'null' => true
            ],
          ]);
      $this->forge->addKey('id', true);
      $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
