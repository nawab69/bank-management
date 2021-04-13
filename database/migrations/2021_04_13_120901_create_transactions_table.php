<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('account_id');
            $table->string('trx_id');
            $table->enum('type',['credit','debit']);
            $table->longText('description');
            $table->decimal('amount',32,2);
            $table->decimal('fee',32,2);
            $table->decimal('total',32,2);
            $table->enum('status',['pending','processing','completed','cancelled']);
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
        Schema::dropIfExists('transactions');
    }
}
