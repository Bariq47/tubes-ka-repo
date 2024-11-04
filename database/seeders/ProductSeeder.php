<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Roti Sosis Keju',
            'harga' => 12000,
            'kategori' => 'Roti',
        ]);
    }
}
