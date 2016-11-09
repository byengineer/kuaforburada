<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KuaforPersonel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuafor_personel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kuafor_id');
            $table->string('isim');
            $table->string('mail')->nullable();
            $table->string('tel')->nullable();
            $table->string('resim')->nullable();
            $table->string('saat_aralik',5);
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
