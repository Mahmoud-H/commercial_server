<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('com_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city_name_a');
            $table->string('city_name_l')->nullable();
            $table->string('city_name_h')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
