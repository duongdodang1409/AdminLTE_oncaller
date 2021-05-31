<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name', '200');
            $table->integer('primary')->default('0')->comment('0 là bình thường, 1 là nổi bật');
            $table->bigInteger('feature_pack_id');
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
        Schema::dropIfExists('features');
    }
}
