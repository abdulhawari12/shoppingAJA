<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => 
           [
           'type' => 'int',
           'usigned' => true,
           'auto_increment' => true,
           'constraint' => 11,
           ],
        'nama_brg' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'harga_brg' => [
           'type' => 'double'
          ],
        'kategori_brg' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'diskon_brg' => [
           'type' => 'double'
          ],
        'jumlah_brg' => [
           'type' => 'double'
          ],
        'gambar_brg' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'users_id' => [
           'type' => 'int',
           'constraint' => 11,
           'usigned' => true
          ],
        'produk_id' => [
           'type' => 'int',
           'constraint' => 11,
           'usigned' => true
          ],
        'created_at' => [
           'type' => 'date',
           'null' => true
          ],
        'updated_at' => [
           'type' => 'date',
           'null' => true
          ],
          ]);
       $this->forge->addKey(['id', true]);
       $this->forge->createTable('pesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pesanan');
    }
}
