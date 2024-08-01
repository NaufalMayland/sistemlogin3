<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruTableSeeder extends Seeder
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
                'nip' => '00001',
                'nama' => 'guru1',
            ],
            [
                'nip' => '00002',
                'nama' => 'guru2'
            ],
        ];
        Guru::insert($userdata);
    }
}
