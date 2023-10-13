<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wallet extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'id' => ['type' => 'int', 'constraint' => 11, 'usigned' => true, 'auto_increment' => true],
           'users_id' => ['type' => 'int', 'constraint' => 11, 'usigned' => true],
           'saldo' => ['type' => 'double', 'default' => 0],
           'saldo_masuk' => ['type' => 'double', 'default' => 0],
           'saldo_keluar' => ['type' => 'double', 'default' => 0],
           'created_at' => ['type' => 'datetime', 'null' => true],
           'updated_at' => ['type' => 'datetime', 'null' => true],
          ]);
      $this->forge->addKey('id', true);
      $this->forge->createTable('wallet');
    }

    public function down()
    {
        $this->forge->dropTable('wallet');
    }
}
