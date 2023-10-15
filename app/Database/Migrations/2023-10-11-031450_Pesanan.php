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
        'nama_produk' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'harga_produk' => [
           'type' => 'double'
          ],
        'kategori_produk' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'diskon_produk' => [
           'type' => 'double'
          ],
        'jumlah_produk' => [
           'type' => 'double'
          ],
        'thumb_produk' => [
           'type' => 'varchar',
           'constraint' => 255
          ],
        'users_id' => [
           'type' => 'int',
           'constraint' => 11,
           'usigned' => true
          ],
        'product_id' => [
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
