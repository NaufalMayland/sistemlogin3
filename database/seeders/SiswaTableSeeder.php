<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaTableSeeder extends Seeder
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
                'nis' => '16631',
                'nama' => 'siswa1',
            ],
            [
                'nis' => '16632',
                'nama' => 'siswa2'
            ]
        ];
        Siswa::insert($userdata);
    }
}
