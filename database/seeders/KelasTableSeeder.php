<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasTableSeeder extends Seeder
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
                'nama_kelas' => 'X PPLG 1',
                'id_guru' => '00002',
            ],
        ];
        Kelas::insert($userdata);
    }
}
