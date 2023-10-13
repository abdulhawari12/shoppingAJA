<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class Cart extends Seeder
{
    public function run()
    {
        $data = 
        [
          'product_id' => 1,
          'users_id' => 1,
          'quantity' => 5,
          'created_at' => Time::now(),
          'updated_at' => Time::now(),
        ];
        $this->db->table('cart')->insert($data);
    }
}
