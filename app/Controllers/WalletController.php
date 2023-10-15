<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WalletModel;
use App\Models\TransactionModel;
use CodeIgniter\I18n\Time;

class WalletController extends BaseController
{
  protected $WalletModel, $TransactionModel;
  public function __construct()
  {
    $this->WalletModel = new WalletModel();
    $this->TransactionModel = new TransactionModel();
  }
  public function index()
  {
    $transaksi = $this->TransactionModel->getTransaksi();
    $data = [
      'title' => 'My Wallet',
      'wallet' => $this->WalletModel->getWallet(),
      'transaksi' => $transaksi,
      'back' => '/Settings',
      'padding_top' => 'pt-9',
    ];
    return view('Wallet/view/v_index', $data);
  }
  public function tambah()
  {
    $data = [
      'title' => 'Tambah Saldo',
      'back' => '/Saldo',
      'padding_top' => '',
    ];
    return view('Wallet/view/v_tambah', $data);
  }
  public function addsaldo($id)
  {
    $saldo = $this->request->getVar('saldo');
    $wallet = $this->WalletModel->getWallet();
    foreach ($wallet as $w) {
      if ($w['users_id'] == $id) {
        $newSaldo = $w['saldo'] + $saldo;
        $newSaldo1 = $w['saldo_masuk'] + $saldo;
        $dataa = [
       'nama_transaksi' => 'Saldo Masuk',
       'saldo_masuk' => $saldo,
       'users_id' => $id,
       'tgl_transaksi' => Time::now(),
       'created_at' => Time::now()
      ];
    $this->TransactionModel->insert($dataa);
        $this->WalletModel->update($w['id'], ['saldo' => $newSaldo, 'saldo_masuk' => $newSaldo1]);
        session()->setFlashData('success', 'Saldo berhasil ditambahkan');
        return redirect()->to('/Saldo');
      }
    }
    $data = [
      'saldo' => $saldo,
      'saldo_masuk' => $saldo,
      'users_id' => $id,
      'created_at' => Time::now(),
    ];
    $dataa = [
       'nama_transaksi' => 'Saldo Masuk',
       'saldo_masuk' => $saldo,
       'users_id' => $id,
       'tgl_transaksi' => Time::now(),
       'created_at' => Time::now()
      ];
    $this->TransactionModel->insert($dataa);
    $this->WalletModel->insert($data);
    session()->setFlashdata('success', 'Saldo berhasil ditambah!');
    return redirect()->to('/Saldo');
  }
}
