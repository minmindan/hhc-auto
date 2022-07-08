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
        Schema::create('newprofiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name')->nullable()->comment('公司名稱');
            $table->string('found')->nullable()->comment('設立日期');
            $table->string('address')->nullable()->comment('地址');
            $table->string('opening')->nullable()->comment('營業時間');
            $table->string('phone')->nullable()->comment('連絡電話');
            $table->text('serve')->nullable()->comment('服務項目');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newprofiles');
    }
};
