<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('uri_tiket');
            $table->boolean('verified')->default(0);
            $table->timestamps();
            $table->foreignId('user_id')->nullable()
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('barang_id')->nullable()
                ->constrained('barangs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
