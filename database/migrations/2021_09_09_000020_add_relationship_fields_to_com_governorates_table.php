<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToComGovernoratesTable extends Migration
{
    public function up()
    {
        Schema::table('com_governorates', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_4833106')->references('id')->on('com_countries');
        });
    }
}
