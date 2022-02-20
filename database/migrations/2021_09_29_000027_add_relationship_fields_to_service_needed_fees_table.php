<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToServiceNeededFeesTable extends Migration
{
    public function up()
    {
        Schema::table('service_needed_fees', function (Blueprint $table) {
            $table->unsignedBigInteger('fee_type_id');
            $table->foreign('fee_type_id', 'fee_type_fk_4991775')->references('id')->on('fee_types');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id', 'service_fk_4991776')->references('id')->on('com_services');
        });
    }
}
