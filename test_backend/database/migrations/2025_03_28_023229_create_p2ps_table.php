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
        Schema::create('p2ps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sender_user_id')->nullable();
            $table->unsignedInteger('currency_id')->nullable();
            $table->text('message');
            $table->decimal('amount', 10, 2);
            $table->integer('method'); // 0 is BUY, 1 is SELL
            $table->timestamps();
            
            $table->foreign('currency_id')
                  ->references('id')
                  ->on('currencies');

            $table->foreign('sender_user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p2ps');
    }
};
