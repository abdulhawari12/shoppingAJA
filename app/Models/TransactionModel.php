<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table            = 'transactions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
       'nama_transaksi','tgl_transaksi','saldo_masuk','created_at','updated_at','users_id',
       'saldo_keluar'
      ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getTransaksi()
    {
      return $this->where('users_id', user_id())->orWhere('tgl_transaksi', date('Y-m-d H:i:s'))->orderBy('id DESC', 'tgl_transaksi DESC')->findAll();
    }
}
