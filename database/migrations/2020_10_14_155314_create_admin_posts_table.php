<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPostsTable extends Migration
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
            $table->softDeletes();
            $table->integer('creator_id')->index();
            $table->integer('updator_id')->nullable()->index();
            $table->integer('editor_id')->nullable()->index();
            $table->dateTime('edited')->nullable();
            $table->integer('deletor_id')->nullable()->index();
            $table->string('title');
            $table->string('slug');
            $table->string('keywords')->nullable();
            $table->integer('views')->default(1);
            $table->string('leadin')->default('');
            $table->text('story');
            $table->string('photo_url')->default('');
            $table->enum('special', ['yes', 'no'])->default('no');
            $table->enum('slider', ['yes', 'no'])->default('no');
            $table->enum('marquee', ['yes', 'no'])->default('no');
            $table->enum('status', ['active', 'draft', 'pending', 'inprocess'])->default('active');
            $table->string('video_url')->default('');
            $table->dateTime('posted_at')->nullable();
            // Event
            $table->enum('event', ['active', 'post'])->default('post');
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
