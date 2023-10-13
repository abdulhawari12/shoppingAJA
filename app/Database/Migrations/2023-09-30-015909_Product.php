<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'id' => [
              'type' => 'int',
              'constraint' => 11,
              'auto_increment' => true,
              'unsigned' => true
             ],
          'nama_produk' => [
              'type' => 'varchar',
              'constraint' => 255,
            ],
          'harga_produk' => [
              'type' => 'double',
            ],
          'kategori_produk' => [
              'type' => 'varchar',
              'constraint' => 255
            ],
          'diskon_produk' => [
              'type' => 'int',
              'constraint' => 100,
              'default' => 0
            ],
          'stok_produk' => [
             'type' => 'double',
            ],
          'deskripsi_produk' => [
             'type' => 'longtext'
            ],
          'warna_produk' => [
             'type' => 'varchar',
             'constraint' => 255
            ],
          'slug' => [
             'type' => 'varchar',
             'constraint' => 255
            ],
          'thumb_produk' => [
             'type' => 'varchar',
             'constraint' => 255
            ],
           'detail_gambar_produk1' => [
             'type' => 'varchar',
             'constraint' => 255,
             'null' => true
            ], 
           'detail_gambar_produk2' => [
             'type' => 'varchar',
             'constraint' => 255,
             'null' => true
            ], 
           'detail_gambar_produk3' => [
             'type' => 'varchar',
             'constraint' => 255,
             'null' => true
            ], 
           'detail_gambar_produk4' => [
             'type' => 'varchar',
             'constraint' => 255,
             'null' => true
            ], 
           'detail_gambar_produk5' => [
             'type' => 'varchar',
             'constraint' => 255,
             'null' => true
            ], 
          'created_at' => [
             'type' => 'datetime',
             'null' => true
            ],
          'updated_at' => [
             'type' => 'datetime',
             'null' => true
            ],
          'deleted_at' => [
             'type' => 'datetime',
             'null' => true
            ],
          ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
