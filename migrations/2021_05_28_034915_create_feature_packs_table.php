<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_packs', function (Blueprint $table) {
            $table->id();
            $table->string('title', '200');
            $table->integer('price');
            $table->integer('price_sale');
            $table->tinyInteger('status')->default('1')->comment('0 là ẩn, 1 là hiện');
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
        Schema::dropIfExists('feature_packs');
    }
}
