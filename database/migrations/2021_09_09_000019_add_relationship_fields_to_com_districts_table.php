<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToComDistrictsTable extends Migration
{
    public function up()
    {
        Schema::table('com_districts', function (Blueprint $table) {
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id', 'city_fk_4833299')->references('id')->on('com_cities');
        });
    }
}
