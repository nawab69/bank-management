<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crypto_buys', function (Blueprint $table) {
            $table->id();
            $table->string('trx_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('crypto_id')->constrained()->onDelete('cascade');
            $table->decimal('fiat',32,2);
            $table->decimal('fee',32,2);
            $table->decimal('crypto',32,16);
            $table->decimal('rate');
            $table->enum('status',['pending','processing','completed','cancelled','hold']);
            $table->string('user_note')->nullable();
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypto_buys');
    }
}
