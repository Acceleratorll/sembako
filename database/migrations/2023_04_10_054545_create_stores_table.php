<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('owners');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('slogan', 100);
            $table->string('front_img')->nullable()->default('default_front_banner.jpg');
            $table->string('banner_img')->nullable()->default('default_banner_banner.jpg');
            $table->float('wallet', 15, 2);
            $table->string('phone');
            $table->string('email');
            $table->softDeletes();
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
        Schema::dropIfExists('stores');
    }
}
