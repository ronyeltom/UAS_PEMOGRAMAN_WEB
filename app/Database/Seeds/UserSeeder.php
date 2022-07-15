<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
            'username' => 'nyongeltom',
			'useremail' => 'nyong.eltom@gmail.com',
			'userpassword' => password_hash('atibamanrony16', PASSWORD_DEFAULT),
        ]);
    }
}
