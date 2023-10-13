<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use CodeIgniter\I18n\Time;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;
class Cart extends BaseController
{
  use ResponseTrait;
  protected $CartModel,$ProductModel;
    public function __construct()
    {
      $this->CartModel = new CartModel();
      $this->ProductModel = new ProductModel();
    }
    public function index()
    {
      $count = $this->CartModel->getCart();
     // dd($count);
        $data = [
          'title' => 'Halaman Keranjang',
          'countCart' => $this->CartModel->countCart(),
          'cart' => $this->CartModel->getCart(),
          'products' => $this->ProductModel->getProduct(),
          'img_found' => 'empty-cart.png',
          'title_found' => 'Yahh... Keranjang kamu kosong',
          'text_found' => 'Tambahkan Produk Ke Keranjang!',
          'search' => '',
          ];
      return view('Home/view/v_cart', $data);
    }
    public function AddCart()
    {
      $product_id = $this->request->getVar('product_id');
      $users_id = $this->request->getVar('users_id');
      $quantity = $this->request->getVar('quantity');
      $nama = $this->request->getVar('nama');
      $gambar = $this->request->getVar('gambar');
      $harga = $this->request->getVar('harga');
      $kategori = $this->request->getVar('kategori');
      $diskon = $this->request->getVar('diskon');
      $warna = $this->request->getVar('warna'); 
         // dd($quantity);
      if($users_id == null)
      {
        session()->setFlashData('error', 'Anda belom login');
        return redirect()->to('/login');
      }
      $keranjang = $this->CartModel->getCartById($users_id);
         // dd($keranjang);
      foreach ($keranjang as $k){
        if($k['product_id'] == $product_id){
          $newqty = $k['quantity'] + $quantity;
          $this->CartModel->update($k['cart_id'], ['quantity' => $newqty]);
          session()->setFlashData('success','Produk Berhasil Dikeranjang');
          return redirect()->to('/Cart');
        }
      } 
      $data = [
         'product_id' => $product_id,
         'users_id' => $users_id,
         'quantity' => $quantity,
         'nama_produk' => $nama,
         'harga_produk' => $harga,
         'diskon_produk' => $diskon,
         'kategori_produk' => $kategori,
         'warna_produk' => $warna,
         'thumb_produk' => $gambar,
         'created_at' => Time::now('Asia/Jakarta'),
        ];
      session()->setFlashData('success', 'Produk Berhasil Dikeranjang');
      $this->CartModel->save($data);
      return redirect()->to('/Cart');
    }
    public function delete($id)
    {
     $this->CartModel->delete($id);
     // dd($this->CartModel);
     session()->setFlashData('success', 'Produk Berhasil Dihapus');
      return redirect()->to('/Cart');
    }
    public function AllDelete($id)
    {
      $cart = $this->CartModel->getCart();
      //dd($cart);
      if($cart == []){
     session()->setFlashData('error', 'Tidak ada produk untuk dihapus');
      return redirect()->to('/Cart');
      }
      $this->CartModel->setData($cart, true, 'del')
    ->onConstraint('cart_id, product_id')
    ->where('del.quantity >', 0)
    ->deleteBatch();
    // $this->CartModel->delete($id);
     session()->setFlashData('success', 'Keranjang berhasil dihapus');
      return redirect()->to('/Cart');
    }
}
