<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('book_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_habis_pinjam');
            $table->date('tgl_kembali')->nullable();
            $table->date('lama_pinjam')->nullable();
            $table->integer('telat')->nullable();
            $table->decimal('denda');
            $table->integer('status')->default(false);
            $table->integer('admin_id');
            $table->softDeletes();
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
        Schema::dropIfExists('transaction');
    }
};
