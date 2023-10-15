<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;
use App\Models\WalletModel;
use App\Models\TransactionModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use CodeIgniter\I18n\Time;
class PesananController extends BaseController
{
  protected $PesananModel,$WalletModel,$TransactionModel,$CartModel,$ProductModel;
    public function __construct()
    {
      $this->PesananModel = new PesananModel();
      $this->WalletModel = new WalletModel();
      $this->TransactionModel = new TransactionModel();
      $this->CartModel = new CartModel();
      $this->ProductModel = new ProductModel();
    }
    public function index()
    {
      $wallet = $this->WalletModel->getWallet();
      $transaksi = $this->TransactionModel->getTransaksi();
      $keranjang = $this->CartModel->getCart();
      $nama = $this->request->getVar('nama');
      $harga = $this->request->getVar('harga');
      $hargaAsli = $this->request->getVar('hargaAsli');
      $diskon = $this->request->getVar('diskon');
      $kategori = $this->request->getVar('kategori');
      $warna = $this->request->getVar('warna');
      $jumlah = $this->request->getVar('jumlah');
      $userid = $this->request->getVar('users_id');
      $produkid = $this->request->getVar('product_id');
      $gambar = $this->request->getVar('gambar');
     // $produk = $this->ProductModel->getProductMultiId($produkid);
    //  dd($produkid);
      if($wallet == [] || $wallet[0]['saldo'] < $harga[0]){
          session()->setFlashdata('errors','Maaf saldo anda kurang');
          return redirect()->to('/Cart');
        }
      else if($nama != null && $keranjang != null){
      foreach ($wallet as $w){
        $newSaldo = [
           'saldo' => $w['saldo'] - $harga[0],
           'saldo_keluar' => $w['saldo_keluar'] + $harga[0]
          ];
        $this->WalletModel->update($w['id'],$newSaldo);
      }
     $data = [];
    $index = 0;
    // dd($nama);
      foreach ($nama as $datanama){
      //  dd($warna[$index]);
        array_push($data,[
           'nama_produk' => $datanama,
           'harga_produk' => $hargaAsli[$index],
           'diskon_produk' => $diskon[$index],
           'kategori_produk' => $kategori[$index],
           'warna_produk' => $warna[$index],
           'thumb_produk' => $gambar[$index],
           'quantity' => $jumlah[$index],
           'product_id' => $produkid[$index],
           'users_id' => $userid[$index],
          ]);
          $index++;
      }
          $this->PesananModel->insertBatch($data);
          $data1 = [];
          $index1 = 0;
      foreach ($nama as $datanama){
      //  dd($jumlah[$index1]);
      foreach ($keranjang as $k){
        $d = $k['diskon_produk'];
        $h = $k['harga_produk'];
        $q = $k['quantity'];
        $Ha = $h - $h * $d / 100;
        $total = $Ha * $q;
      array_push($data1,[
         'nama_transaksi' => 'Membeli '  . $jumlah[$index1] . ' Produk ' . $datanama,
         'tgl_transaksi' => Time::now(),
         'saldo_keluar' => $total,
         'users_id' => user_id()
        ]);
      }
        $index1++;
    }
       $this->TransactionModel->insertBatch($data1);
    //dd($data1);
     $data2 = [];
     $index2 = 0;
       foreach ($wallet as $w){
        $newSaldo = [
           'saldo' => $w['saldo'] - $harga[0],
           'saldo_keluar' => $w['saldo_keluar'] + $harga[0]
          ];
        $this->WalletModel->update($w['id'],$newSaldo);
      }
      $this->CartModel->setData($keranjang, true, 'del')
    ->onConstraint('cart_id, product_id')
    ->where('del.quantity >', 0)
    ->deleteBatch();
       session()->setFlashdata('success', 'Produk Berhasil Di pesan');
       return redirect()->to('/');
    
      }else{
        session()->setFlashdata('errors', 'Tidak ada keranjang untuk dipesan');
        return redirect()->to('/Cart');
      }
  }
}
