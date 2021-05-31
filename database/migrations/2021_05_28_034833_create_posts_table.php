<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', '200');
            $table->text('content');
            $table->text('images')->nullable();
            $table->bigInteger('user_id');
            $table->text('slug')->nullable();
            $table->string('tags', '100')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
