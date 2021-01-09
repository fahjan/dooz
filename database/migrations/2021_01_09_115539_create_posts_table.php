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
            $table->timestamps();
            $table->softDelete();
            $table->integer('creator_id')->index();
            $table->integer('updater_id')->index();
            $table->integer('editor_id')->index();
            $table->integer('destroyer_id')->index();
            $table->string('title');
            $table->string('slug');
            $table->string('keywords');
            $table->text('story');
            $table->integer('views')->default(1);
            $table->enum('status', ['publish', 'draft', 'editing'])->default('draft');
            $table->dateTime('post_at');
            $table->enum('is_special', ['yes', 'no'])->default('no');
            $table->enum('slider', ['yes', 'no'])->default('no');
            $table->enum('marquee', ['yes', 'no'])->default('no');
            $table->enum('event', ['yes', 'no'])->default('no');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();

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
