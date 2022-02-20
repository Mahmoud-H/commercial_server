<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegPeopleTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_people', function (Blueprint $table) {
            $table->unsignedBigInteger('crec_reg_request_id');
            $table->foreign('crec_reg_request_id', 'crec_reg_request_fk_4877760')->references('id')->on('crec_reg_requests');
            $table->unsignedBigInteger('person_nationality_id')->nullable();
            $table->foreign('person_nationality_id', 'person_nationality_fk_4877768')->references('id')->on('com_countries');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_4877769')->references('id')->on('com_countries');
            $table->unsignedBigInteger('governorate_id')->nullable();
            $table->foreign('governorate_id', 'governorate_fk_4877770')->references('id')->on('com_governorates');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_4877771')->references('id')->on('com_cities');
            $table->unsignedBigInteger('person_type_id');
            $table->foreign('person_type_id', 'person_type_fk_4941359')->references('id')->on('person_types');
        });
    }
}
