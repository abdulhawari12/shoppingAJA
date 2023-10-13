<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class Admin extends BaseController
{
  protected $ProductModel;
  protected $validation;
    public function __construct()
    {
      $this->ProductModel = new ProductModel();
      $this->validation = \Config\Services::Validation();
    }
    public function index()
    {
        $data = [
          'title' => 'Halaman Admin',
          'product' => $this->ProductModel->getProduct(),
          ];
      return view('Admin/view/v_dashboard', $data);
    }
   public function product()
   {
     $data = [
        'title' => 'Halaman Form',
        'validation' => $this->validation
       ];
      return view('Admin/view/v_product', $data);
   }
   public function addproduct()
   {
     $rules = [
        'nama' => 'required',
        'harga' => 'required|integer',
        'kategori' => 'required|is_unique[product.kategori_produk]',
        'diskon' => 'integer|max_length[100]',
        'thumbnail' => 'required',
        'deskripsi' => 'required',
        'stok' => 'integer|min_length[1]'
       ];
       
     if(!$this->validate($rules)){
       return redirect()->to('/admin/product')->withInput();
     }
     
     $slug = url_title($this->request->getVar('nama'), '-', true);
     $data = [
         'nama_produk' => $this->request->getVar('nama'),
         'harga_produk' => $this->request->getVar('harga'),
         'slug' => $slug,
         'kategori_produk' => $this->request->getVar('kategori'),
         'warna_produk' => $this->request->getVar('warna'),
         'stok_produk' => $this->request->getVar('stok'),
         'diskon_produk' => $this->request->getVar('diskon'),
         'deskripsi_produk' => $this->request->getVar('deskripsi'),
         'thumb_produk' => $this->request->getVar('thumbnail'),
         'detail_gambar_produk1' => $this->request->getVar('detail1'),
         'detail_gambar_produk2' => $this->request->getVar('detail2'),
         'detail_gambar_produk3' => $this->request->getVar('detail3'),
         'detail_gambar_produk4' => $this->request->getVar('detail4'),
         'detail_gambar_produk5' => $this->request->getVar('detail5'),
       ];
      $this->ProductModel->save($data);
      session()->setFlashData('success', 'Produk Berhasil Ditambahkan');
      return redirect()->to('/admin');
   }
   public function users()
   {
     $data = [
        'title' => 'Halaman User',
       ];
      return view('Admin/view/v_users', $data);
   }
   public function content()
   {
     $data = [
        'title' => 'Halaman Content',
       ];
      return view('Admin/view/v_content', $data);
   }
   public function settings()
   {
     $data = [
        'title' => 'Halaman Settings',
       ];
      return view('Admin/view/v_settings', $data);
   }
}
