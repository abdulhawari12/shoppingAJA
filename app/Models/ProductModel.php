<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;
class ProductModel extends Model
{
    protected $table            = 'product';
    protected $allowedFields    = [
      'nama_produk','harga_produk','kategori_produk','diskon_produk','deskripsi_produk','stok_produk','slug','warna_produk','thumb_produk','detail_gambar_produk1','detail_gambar_produk2','detail_gambar_produk3','detail_gambar_produk4','detail_gambar_produk5'
        ,'created_at','updated_at','deleted_at'
      ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function getProduct($search = null){
     if ($search !== null){
      return $this->like('nama_produk',$search)->paginate(10,'product');
      }
      return $this->orderBy('id', 'DESC')->paginate(10,'product');
    }
    public function getProductDiskon()
    {
      return $this->orderBy('diskon_produk', 'DESC')->paginate(10,'product');
    }
    public function getProductTermahal()
    {
    return $this->orderBy('Harga_produk', 'DESC')->paginate(10,'product');
    }
    public function getProductTermurah()
    {
      return $this->orderBy('harga_produk', 'ASC')->paginate(10,'product');
    }
    public function getProductById($id){
      return $this->where(['id' => $id])->first();
    }
    public function getProductKategori($kategori)
    {
      return $this->where(['kategori_produk' => $kategori])->orderBy('id', 'DESC')->paginate(10,'product');
    }
}
