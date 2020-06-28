<?php

use App\Models\Warga;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warga = [
            [
                'id_bagian' => 2,
                'nama' => 'Sri Fanny Atmadja',
                'nik' => '3578101312860312',
                'tgl_lahir' => '1986-12-13',
                'jkel' => 'P',
                'status_kawin' => 'sudah',
                'no_kk' => '3578101312170312',
                'agama' => 'Islam',
                'pendidikan' => 'Strata 1',
                'pekerjaan' => 'Karyawan Swasta',
                'kewarganegaraan' => 'WNI',
                'kedudukan_keluarga' => 'Anggota',
                'alamat' => 'Jl Rajawali 3, Surabaya, Jawa Timur',
                'alamat_ktp' => 'Jl Rajawali 3, Surabaya, Jawa Timur'
            ],
            [
                'id_bagian' => 2,
                'nama' => 'Johan Kuswoyo',
                'nik' => '3578101210840312',
                'tgl_lahir' => '1984-10-12',
                'jkel' => 'L',
                'status_kawin' => 'sudah',
                'no_kk' => '3578101312170312',
                'agama' => 'Islam',
                'pendidikan' => 'Strata 1',
                'pekerjaan' => 'Karyawan Swasta',
                'kewarganegaraan' => 'WNI',
                'kedudukan_keluarga' => 'Kepala',
                'alamat' => 'Jl Rajawali 3, Surabaya, Jawa Timur',
                'alamat_ktp' => 'Jl Rajawali 3, Surabaya, Jawa Timur'
            ],
            [
                'id_bagian' => 2,
                'nama' => 'Susila Suhendra Irawan',
                'nik' => '3578102807950312',
                'tgl_lahir' => '1995-07-28',
                'jkel' => 'L',
                'status_kawin' => 'belum',
                'no_kk' => '3578101112160312',
                'agama' => 'Kristen',
                'pendidikan' => 'Strata 1',
                'pekerjaan' => 'PNS',
                'kewarganegaraan' => 'WNI',
                'kedudukan_keluarga' => 'Anggota',
                'alamat' => 'Jl Kalianak Tmr 179, Surabaya, Jawa Timur',
                'alamat_ktp' => 'Jl Kalianak Tmr 179, Surabaya, Jawa Timur'
            ],
            [
                'id_bagian' => 2,
                'nama' => 'Bima Agung Tahyadi',
                'nik' => '3578102201910312',
                'tgl_lahir' => '1997-01-22',
                'jkel' => 'L',
                'status_kawin' => 'belum',
                'no_kk' => '3578101102160312',
                'agama' => 'Islam',
                'pendidikan' => 'Strata 1',
                'pekerjaan' => 'Buruh',
                'kewarganegaraan' => 'WNI',
                'kedudukan_keluarga' => 'Anggota',
                'alamat' => 'Jl Undaan Kulon 45, Surabaya, Jawa Timur',
                'alamat_ktp' => 'Jl Undaan Kulon 45, Surabaya, Jawa Timur'
            ],
            [
                'id_bagian' => 2,
                'nama' => 'Cahaya Utami Salim',
                'nik' => '3578101607940312',
                'tgl_lahir' => '1994-07-16',
                'jkel' => 'P',
                'status_kawin' => 'belum',
                'no_kk' => '3578101102260312',
                'agama' => 'Islam',
                'pendidikan' => 'Strata 1',
                'pekerjaan' => 'Wirausaha',
                'kewarganegaraan' => 'WNI',
                'kedudukan_keluarga' => 'Anggota',
                'alamat' => 'Jl Gadung 1, Surabaya, Jawa Timur',
                'alamat_ktp' => 'Jl Gadung 1, Surabaya, Jawa Timur'
            ],
        ];

        foreach ($warga as $value) {
            Warga::create($value);
        }
    }
}
