<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
      $data =[ [
        'nama_produk'  =>  'Produk 1',
        'harga_produk'  =>  2500000,
        'kategori_produk' => 'laptop',
        'diskon_produk'  => 25,
        'deskripsi_produk'  => 'lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum',
        'warna_produk' => 'red',
        'thumb_produk' => 'product.jpg',
        'detail_gambar_produk1' => 'product.jpg',
        'detail_gambar_produk2' => 'product.jpg',
        'detail_gambar_produk3' => 'product.jpg',
        'detail_gambar_produk4' => 'product.jpg',
        'stok_produk' =>  500,
      ],
       [
        'nama_produk'  =>  'Produk 1',
        'harga_produk'  =>  2500000,
        'kategori_produk' => 'laptop',
        'diskon_produk'  => 25,
        'deskripsi_produk'  => 'lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum',
        'warna_produk' => 'red',
        'thumb_produk' => 'product.jpg',
        'detail_gambar_produk1' => 'product.jpg',
        'detail_gambar_produk2' => 'product.jpg',
        'detail_gambar_produk3' => 'product.jpg',
        'detail_gambar_produk4' => 'product.jpg',
        'stok_produk' =>  500,
      ],
  [
   'nama_produk'  =>  'Produk 1',
   'harga_produk'  =>  2500000,
   'kategori_produk' => 'laptop',
   'diskon_produk'  => 25,
   'deskripsi_produk'  => 'lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsumlorem ipsum',
   'warna_produk' => 'red',
   'thumb_produk' => 'product.jpg',
   'detail_gambar_produk1' => 'product.jpg',
   'detail_gambar_produk2' => 'product.jpg',
   'detail_gambar_produk3' => 'product.jpg',
   'detail_gambar_produk4' => 'product.jpg',
   'stok_produk' =>  500,
 ],];
 $this->db->table('product')->insertBatch($data);
}
}