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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('p2p_id')->nullable();
            $table->unsignedInteger('market_id')->nullable();
            $table->integer('method'); // 0 is BUY, 1 is SELL, 2 is TRANSFER
            $table->decimal('amount', 10, 2);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('p2p_id')
                  ->references('id')
                  ->on('p2ps');

            $table->foreign('market_id')
                  ->references('id')
                  ->on('markets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
