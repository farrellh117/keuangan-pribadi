<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'amount', 'type', 'description'
    ];
}

// Migration file: database/migrations/xxxx_xx_xx_create_transactions_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('amount', 15, 2);
            $table->enum('type', ['income', 'expense']);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};

// Seeder file: database/seeders/TransactionSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'date' => now(),
            'amount' => 500000,
            'type' => 'income',
            'description' => 'Gaji Bulanan'
        ]);

        Transaction::create([
            'date' => now(),
            'amount' => 100000,
            'type' => 'expense',
            'description' => 'Belanja Harian'
        ]);
    }
}
