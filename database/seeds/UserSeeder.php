<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id_warga' => 1,
                'id_bagian' => 2,
                'tipe' => 'Warga',
                'username' => 'sr312',
                'password' => Hash::make('sri1986'),
            ],
            [
                'id_warga' => 2,
                'id_bagian' => 1,
                'tipe' => 'RW',
                'username' => 'jo312',
                'password' => Hash::make('joh1984'),
            ],
            [
                'id_warga' => 3,
                'id_bagian' => 2,
                'tipe' => 'RT',
                'username' => 'su312',
                'password' => Hash::make('sus1995'),
            ],
            [
                'id_warga' => 4,
                'id_bagian' => 2,
                'tipe' => 'Warga',
                'username' => 'bi312',
                'password' => Hash::make('bim1997'),
            ],
            [
                'id_warga' => 5,
                'id_bagian' => 2,
                'tipe' => 'Warga',
                'username' => 'ca312',
                'password' => Hash::make('cah1994'),
            ],
        ];

        foreach ($user as $value) {
            User::create($value);
        }
    }
}
