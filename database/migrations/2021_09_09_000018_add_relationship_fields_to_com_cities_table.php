<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToComCitiesTable extends Migration
{
    public function up()
    {
        Schema::table('com_cities', function (Blueprint $table) {
            $table->unsignedBigInteger('governorate_id');
            $table->foreign('governorate_id', 'governorate_fk_4833114')->references('id')->on('com_governorates');
        });
    }
}
