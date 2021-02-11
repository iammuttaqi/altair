<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurtherSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('further_sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->unsigned()->nullable();
            $table->string('date')->nullable();
            $table->string('name')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('details')->nullable();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('further_sub_category', function(Blueprint $table){
            $table->foreign('sub_category_id')->references('id')->on('sub_category')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('further_sub_category');
    }
}
