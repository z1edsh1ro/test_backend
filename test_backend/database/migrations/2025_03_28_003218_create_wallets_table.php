<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id'); // unsigned integer
            $table->string('name');
            $table->decimal('rate', 10, 2);
            $table->timestamps();
        });

        Schema::create('wallets', function (Blueprint $table) {
            $table->increments('id');  // unsigned integer
            $table->unsignedInteger('currency_id');  // unsigned integer for foreign key
            $table->decimal('amount', 10, 2);
            $table->timestamps();
            
            $table->foreign('currency_id') // Foreign key constraint
                  ->references('id')
                  ->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
        Schema::dropIfExists('currencies');
    }
};
