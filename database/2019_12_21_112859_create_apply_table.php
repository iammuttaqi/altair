<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('country');
            $table->longText('street_address_1');
            $table->longText('street_address_2');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('email');
            $table->timestamp('date_of_Birth');
            $table->string('country_of_Birth');
            $table->string('gender');
            $table->string('eye_color');
            $table->string('height');
            $table->string('license_number');
            $table->string('license_expiration_date');
            $table->string('license_country');
            $table->string('native_driver_license');
            $table->string('img_user');
            $table->string('img_signature');
            $table->string('img_license');
            $table->string('year_main');
            $table->string('amount');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::drop('apply');
    }
}
