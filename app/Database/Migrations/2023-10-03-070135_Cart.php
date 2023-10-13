<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
    public function up()
    {
        $this->forge->addField([
          'cart_id' => 
            ['type' => 'int',
             'constraint' => 11,
             'usigned' => true,
             'auto_increment' => true
            ],
          'product_id' => 
            [
              'type' => 'int',
              'constraint' => 11,
              'usigned' => true
            ],
          'users_id' =>
            [
              'type' => 'int',
              'constraint' => 11,
              'usigned' => true
            ],
          'quantity' => 
           [
             'type' => 'int',
             'constraint' => 255
           ],
          'nama_produk' =>
           [
             'type' => 'varchar',
             'constraint' => 255
           ],
          'kategori_produk' =>
           [
             'type' => 'varchar',
             'constraint' => 255
           ],
          'harga_produk' =>
           [
             'type' => 'double'
           ],
          'diskon_produk' =>
           [
             'type' => 'double'
           ],
          'warna_produk' =>
           [
             'type' => 'varchar',
             'constraint' => 255
           ],
          'thumb_produk' =>
           [
             'type' => 'varchar',
             'constraint' => 255
           ], 
           'created_at' => [
              'type' => 'datetime'
             ],
           'updated_at' => [
              'type' => 'datetime'
             ],
           'deleted_at' => [
              'type' => 'datetime'
             ],
          ]);
        $this->forge->addKey('cart_id', true);
        $this->forge->createTable('cart');
    }

    public function down()
    {
        $this->forge->dropTable('cart');
    }
}
