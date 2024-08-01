<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelTableSeeder extends Seeder
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
                'nama_mapel' => 'Bahasa Indonesia',
                'id_guru' => '00001',
            ],
        ];
        Mapel::insert($userdata);
    }
}
