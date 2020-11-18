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
            $table->unsignedBigInteger('stasiun_id')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('barangimage_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
            $table->foreign('stasiun_id')
                ->references('id')
                ->on('stasiuns')
                ->onDelete('set null');
            $table->foreign('kategori_id')
                ->references('id')
                ->on('barang_kategoris')
                ->onDelete('set null');
            $table->foreign('barangimage_id')
                ->references('id')
                ->on('barang_images')
                ->onDelete('set null');
            $table->foreign('status_id')
                ->references('id')
                ->on('barang_statuses')
                ->onDelete('set null');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
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
