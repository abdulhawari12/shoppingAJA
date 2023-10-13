<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table            = 'cart';
    protected $primaryKey = 'cart_id';
    protected $allowedFields    = [
       'product_id',
       'users_id',
       'nama_produk',
       'harga_produk',
       'thumb_produk',
       'warna_produk',
       'kategori_produk',
       'diskon_produk',
       'quantity',
       'created_at',
       'updated_at',
       'deleted_at',
      ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $useSoftDeletes = true;
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
   public function getCartById($id)
    {
      return $this->where(['users_id' => $id])->find();
    }
  /*  protected $cart,$db;
    public function __construct()
    {
      $this->db = \Config\Database::connect();
      $this->cart = $this->db->table('product');
    } */
    public function getCart()
    {
      return $this->where(['users_id' => user_id()])->findAll();
    }
   /* public function getCartById($id)
    {
      $this->cart->select('id,nama_produk,diskon_produk,kategori_produk,harga_produk,warna_produk,thumb_produk,product_id,cart_id,quantity')->where(['users_id' => $id]);
      $this->cart->join('cart', 'cart.product_id = product.id');
      $result = $this->cart->get();
      //dd($result->getRow());
      return $result->getRow();
    } 
    public function getCartDelete($id)
    {
      $this->cart->select('id,nama_produk,diskon_produk,kategori_produk,harga_produk,warna_produk,thumb_produk,product_id,cart_id,quantity')->where(['users_id' => $id]);
      $this->cart->join('cart', 'cart.product_id = product.id');
      $result = $this->cart->get();
      //dd($result->getRow());
      return $result->getRowArray();
    } */
    public function countCart()
    {
      return $this->where(['users_id' => user_id()])->countAllResults();
    }
}
