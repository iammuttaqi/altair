<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modules_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('details')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('serial')->nullable();
            $table->tinyInteger('show_in_home')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();;
            $table->timestamps();
        });

        Schema::table('category', function(Blueprint $table){
            $table->foreign('modules_id')->references('id')->on('modules')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category');
    }
}
