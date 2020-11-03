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
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('subscription_status');
            $table->string('e-mail')->unique();
            $table->string('password');
        });

        Schema::create('blog_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('date');
            $table->string('author');
            $table->longText('page_content');
            $table->boolean('premium_content_status');
            $table->longText('comments');
            $table->integer('user_id');

        });

        Schema::create('roles', function (Blueprint $table) {
            $table->string('name');
            $table->bigIncrements('id');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->string('name');
            $table->bigIncrements('id');
        });

        Schema::create('user_roles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('role_id')->references('id')->on('roles');

        });

        Schema::create('blog_items_categories', function (Blueprint $table) {
            $table->integer('blog_item_id')->unsigned();

            $table->foreign('blog_item_id')->references('id')->on('blog_items');
            $table->foreign('category_id')->references('id')->on('blog_items');

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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('blog_items_categories');
    }
}
