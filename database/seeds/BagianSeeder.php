<?php

use App\Models\Bagian;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bagian = [
            [
                "nama_bagian" => "RW 001",
                "tipe_bagian" => "RW"
            ],
            [
                "nama_bagian" => "RT 001",
                "tipe_bagian" => "RT"
            ],
            [
                "nama_bagian" => "RT 002",
                "tipe_bagian" => "RT"
            ],
            [
                "nama_bagian" => "RT 003",
                "tipe_bagian" => "RT"
            ],
        ];

        

        foreach ($bagian as $value) {
            Bagian::create($value);
        }
    }
}
