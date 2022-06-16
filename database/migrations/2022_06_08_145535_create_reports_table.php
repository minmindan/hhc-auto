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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type')->nullable()->comment('查詢類型');
            $table->string('company')->nullable()->comment('公司名稱/個人');
            $table->string('title')->nullable()->comment('職稱');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('phone')->nullable()->comment('電話號碼');
            $table->string('address')->nullable()->comment('郵件地址');
            $table->string('demand')->nullable()->comment('需求說明');
            $table->string('state')->nullable()->comment('處理狀態');
            $table->string('remark')->nullable()->comment('備註說明');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
