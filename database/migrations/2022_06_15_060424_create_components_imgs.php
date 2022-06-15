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
        Schema::create('components_imgs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('path')->nullable()->comment('圖片路徑');
            $table->string('iid')->nullable()->comment('圖片ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('components_imgs');
    }
};
