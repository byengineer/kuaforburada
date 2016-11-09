<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandevular extends Migration
{
    public function up()
    {
        Schema::create('randevular', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kuafor_id');
            $table->integer('personel_id');
            $table->date('tarih');
            $table->string('saat',5);
            $table->boolean('durum');
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
        //
    }
}
