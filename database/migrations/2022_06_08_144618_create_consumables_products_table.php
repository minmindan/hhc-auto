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
        Schema::create('consumables_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name')->comment('商品名稱');
            $table->string('primary_img')->nullable()->comment('主要圖片');
            $table->string('model')->nullable()->comment('型號');
            $table->string('primary')->nullable()->comment('主打商品');
            $table->string('weights')->comment('商品排序');
            $table->text('standard')->nullable()->comment('規格');
            $table->text('feature')->nullable()->comment('特色');
            $table->text('illustrate')->nullable()->comment('說明');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumables_products');
    }
};
