<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('subscription_status')->default(false);
            $table->string('email')->unique();
            $table->string('password');
        });

        Schema::create('blog_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('date');
            $table->string('author');
            $table->longText('page_content');
            $table->boolean('premium_content_status')->default(false);
            $table->bigInteger('user_id')->unsigned()->default('1');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('image')->nullable();

        });

        Schema::create('categories', function (Blueprint $table) {
            $table->string('name');
            $table->bigIncrements('id');
        });

        Schema::create('blog_items_categories', function (Blueprint $table) {
            $table->bigInteger('blog_item_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();

        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigInteger('blog_item_id')->unsigned();
            $table->foreign('blog_item_id')->references('id')->on('blog_items');
            $table->longText('comment');
            $table->bigIncrements('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('blog_items');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('blog_items_categories');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('blog_items_comments');
    }
}
