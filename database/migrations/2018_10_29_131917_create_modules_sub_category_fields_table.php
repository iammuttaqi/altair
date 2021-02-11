<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesSubCategoryFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules_sub_category_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modules_id')->unsigned()->nullable();
            $table->integer('name')->nullable();
            $table->integer('summary')->nullable();
            $table->integer('details')->nullable();
            $table->integer('thumbnail_image')->nullable();
            $table->integer('image_2')->nullable();
            $table->integer('image_3')->nullable();
            $table->integer('image_4')->nullable();
            $table->integer('caption_1')->nullable();
            $table->integer('caption_2')->nullable();
            $table->integer('caption_3')->nullable();
            $table->integer('caption_4')->nullable();
            $table->integer('status')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();;
            $table->timestamps();
        });

        Schema::table('modules_sub_category_fields', function(Blueprint $table){
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
        Schema::drop('modules_sub_category_fields');
    }
}
