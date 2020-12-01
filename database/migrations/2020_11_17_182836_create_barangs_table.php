<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255);
            $table->date('tanggal');
            $table->string('lokasi')->nullable();
            $table->text('deskripsi');
            $table->string('warna')->nullable();
            $table->string('merek')->nullable();
            $table->foreignId('user_id')->nullable()
                ->constrained('users')
                ->onDelete('set null');
            $table->foreignId('status_id')->nullable()
                ->constrained('barang_statuses')
                ->onDelete('set null');
            $table->foreignId('stasiun_id')->nullable()
                ->constrained('stasiuns')
                ->onDelete('set null');
            $table->foreignId('kategori_id')->nullable()
                ->constrained('barang_kategoris')
                ->onDelete('set null');
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
        Schema::dropIfExists('barangs');
    }
}
