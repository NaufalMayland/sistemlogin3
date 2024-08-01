<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [
            [
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'),
                'id_users' => '2',
                'role' => 'admin',
            ],
            [
                'email' => 'guru1@gmail.com',
                'password' => Hash::make('guru1123'),
                'id_users' => '00001',
                'role' => 'guru',
            ],
            [
                'email' => 'guru2@gmail.com',
                'password' => Hash::make('guru2123'),
                'id_users' => '00002',
                'role' => 'guru',
            ],
            [
                'email' => 'siswa1@gmail.com',
                'password' => Hash::make('siswa1123'),
                'id_users' => '16631',
                'role' => 'siswa',
            ],
            [
                'email' => 'siswa2@gmail.com',
                'password' => Hash::make('siswa2123'),
                'id_users' => '16632',
                'role' => 'siswa',
            ],
        ];
        User::insert($userdata);
    }
}
