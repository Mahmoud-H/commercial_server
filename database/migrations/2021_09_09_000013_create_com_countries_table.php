<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('com_countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_name_a');
            $table->string('country_name_l')->nullable();
            $table->string('iso_3')->nullable();
            $table->string('iso_num')->nullable();
            $table->string('country_tel_prefix')->nullable();
            $table->string('nationality_a')->nullable();
            $table->string('nationality_l')->nullable();
            $table->boolean('country_is_valid')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
