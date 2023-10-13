<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class WalletSeeder extends Seeder
{
    public function run()
    {
        $data = ['users_id' => 1,'saldo_masuk' => 2000000,
        'saldo_keluar' => 0,
        'created_at' => Time::now()];
        $this->db->table('wallet')->insert($data);
    }
}
