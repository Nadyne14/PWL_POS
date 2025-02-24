<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder {
    public function run(): void {
        $data = [
            ['nama_barang' => 'Laptop', 'kategori_id' => 1, 'harga' => 15000000, 'stok' => 10],
            ['nama_barang' => 'Smartphone', 'kategori_id' => 1, 'harga' => 5000000, 'stok' => 20],
            ['nama_barang' => 'Baju', 'kategori_id' => 2, 'harga' => 150000, 'stok' => 50],
            ['nama_barang' => 'Celana', 'kategori_id' => 2, 'harga' => 200000, 'stok' => 30],
            ['nama_barang' => 'Roti', 'kategori_id' => 3, 'harga' => 20000, 'stok' => 40],
            ['nama_barang' => 'Susu', 'kategori_id' => 4, 'harga' => 25000, 'stok' => 25],
            ['nama_barang' => 'Kopi', 'kategori_id' => 4, 'harga' => 30000, 'stok' => 15],
            ['nama_barang' => 'Pulpen', 'kategori_id' => 5, 'harga' => 5000, 'stok' => 100],
            ['nama_barang' => 'Pensil', 'kategori_id' => 5, 'harga' => 3000, 'stok' => 80],
            ['nama_barang' => 'Buku Tulis', 'kategori_id' => 5, 'harga' => 15000, 'stok' => 60],
        ];
        DB::table('m_barang')->insert($data);
    }
}
