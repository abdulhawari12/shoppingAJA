<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\CartModel;
use App\Models\WalletModel;
class Home extends BaseController
{
  protected $ProductModel,$CartModel,$WalletModel;
    public function __construct()
    {
      $this->ProductModel = new ProductModel();
      $this->CartModel = new CartModel();
      $this->WalletModel = new WalletModel();
    }
    public function index()
    {
      $data = [
         'title' => 'Halaman Home',
         'product' => $this->ProductModel->getProduct(),
         'pt_5' => '',
         'countCart' => $this->CartModel->countCart(),
        ];
        return view('Home/view/v_home', $data);
    }
    public function order()
    {
      $search = $this->request->getVar('search');
      $sort = $this->request->getVar('sort');
      $product = [];
       if($search){
         $product = $this->ProductModel->getProduct($search);
       }else if($sort == "diskon"){
         $product = $this->ProductModel->getProductDiskon();
       }else if($sort == 'harga_termahal'){
         $product = $this->ProductModel->getProductTermahal();
       }else if($sort == 'harga_termurah'){
         $product = $this->ProductModel->getProductTermurah();
       }else{
         $product = $this->ProductModel->getProduct();
       }
       $pagerUrl = $this->request->getVar('page_product');
      $data = [
        'title' => 'Halaman Order',
        'product' => $product,
        'pt_5' => 'pt-5',
        'search' => $search,
        'countCart' => $this->CartModel->countCart(),
        'pager' => $this->ProductModel->pager,
        'pageUrl' => $pagerUrl,
        'img_found' => 'not-found.png',
        'title_found' => 'No Data Found',
        'text_found' => 'Nothing, look for specific keywords!',
        ];
      return view('Home/view/v_order', $data);
    }
    public function getById($id){
      $product = $this->ProductModel->getProductById($id);
      //dd($product);
      if($product == null){
        return redirect()->to('/');
      }
      $kategori = $product['kategori_produk'];
      $data = [
         'title' => 'Halaman Detail',
         'product' => $this->ProductModel->getProductById($id),
         'products' => $this->ProductModel->getProductKategori($kategori),
         'countCart' => $this->CartModel->countCart(),
        ];
      return view('Home/view/v_detail', $data);
    }
    public function status()
    {
      $data = [
        'title' => 'Halaman Status',
        'countCart' => $this->CartModel->countCart(),
        ];
      return view('Home/view/v_status', $data);
    }
    public function settings()
    {
      $data = [
        'title' => 'Halaman settings',
        'countCart' => $this->CartModel->countCart(),
        'wallet' => $this->WalletModel->getWallet()
        ];
      return view('Home/view/v_settings', $data);
    }
}
