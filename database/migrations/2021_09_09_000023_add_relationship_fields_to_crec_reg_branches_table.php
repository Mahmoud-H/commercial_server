<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegBranchesTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_branches', function (Blueprint $table) {
            $table->unsignedBigInteger('crec_reg_request_id');
            $table->foreign('crec_reg_request_id', 'crec_reg_request_fk_4836241')->references('id')->on('crec_reg_requests');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_4836248')->references('id')->on('com_countries');
            $table->unsignedBigInteger('governorate_id')->nullable();
            $table->foreign('governorate_id', 'governorate_fk_4836249')->references('id')->on('com_governorates');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_4836250')->references('id')->on('com_cities');
            $table->unsignedBigInteger('branch_work_class_id')->nullable();
            $table->foreign('branch_work_class_id', 'branch_work_class_fk_4836262')->references('id')->on('com_work_classes');
        });
    }
}
