<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_name');
            $table->string('kota');
            $table->string('alamat');
            $table->string('outlet_email');
        });
        */

        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kondisi');
            $table->string('jenis_barang');
            $table->string('kode_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::dropIfExists('outlets');*/
        Schema::dropIfExists('stoks');
    }
}