<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->longText('detail');
            $table->enum('type', ['rumah adat', 'alat musik tradisional','pakaian adat','tarian tradisional','makanan khas']);
            $table->string('image');
            $table->string('File');
            $table->unsignedBigInteger('province_id');
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
