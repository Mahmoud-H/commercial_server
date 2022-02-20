<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegRequestsTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_fk_4836098')->references('id')->on('com_countries');
            $table->unsignedBigInteger('governorate_id')->nullable();
            $table->foreign('governorate_id', 'governorate_fk_4836099')->references('id')->on('com_governorates');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id', 'city_fk_4836100')->references('id')->on('com_cities');
            $table->unsignedBigInteger('crec_work_class_id')->nullable();
            $table->foreign('crec_work_class_id', 'crec_work_class_fk_4836122')->references('id')->on('com_work_classes');
        });
    }
}
