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
        Schema::create('index_banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img_path')->nullable()->comment('圖片路徑');
            $table->string('tittle')->nullable()->comment('標題');
            $table->string('subtittle')->nullable()->comment('副標題');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('index_banners');
    }
};
