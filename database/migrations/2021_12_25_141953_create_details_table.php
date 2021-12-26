<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_awal');
            $table->year('tahun_akhir');
            $table->enum('tingkat_perkembangan', ['Asli', 'Copy']);
            $table->enum('media_simpan', ['Kertas', 'CD/DVD']);
            $table->enum('kondisi', ['Baik', 'Rusak']);
            $table->string('lokasi');
            $table->integer('jumlah')->unsigned();
            $table->enum('status', ['Ada', 'Dimusnahkan', 'Terbakar']);
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
        Schema::dropIfExists('details');
    }
}
