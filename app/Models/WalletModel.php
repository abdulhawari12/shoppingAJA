<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model
{
  protected $table            = 'wallet';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['saldo_masuk', 'saldo_keluar', 'created_at', 'updated_at', 'users_id', 'saldo'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'date';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  public function getWallet()
  {
    return $this->where(['users_id' => user_id()])->findAll();
  }
}
