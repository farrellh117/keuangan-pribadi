<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama sebelum menambahkan data baru
        Schema::disableForeignKeyConstraints();
        DB::table('transactions')->truncate();
        Schema::enableForeignKeyConstraints();

        // Tambahkan data dummy
        Transaction::create([
            'date' => now(),
            'amount' => 100000,
            'type' => 'income',
            'description' => 'Gaji Bulanan'
        ]);

        Transaction::create([
            'date' => now()->subDays(3),
            'amount' => 50000,
            'type' => 'expense',
            'description' => 'Belanja Bulanan'
        ]);
    }
}
