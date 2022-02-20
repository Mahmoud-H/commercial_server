<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegFeesTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_fees', function (Blueprint $table) {
            $table->unsignedBigInteger('crec_reg_request_id');
            $table->foreign('crec_reg_request_id', 'crec_reg_request_fk_4991783')->references('id')->on('crec_reg_requests');
            $table->unsignedBigInteger('fee_type_id');
            $table->foreign('fee_type_id', 'fee_type_fk_4991784')->references('id')->on('fee_types');
        });
    }
}
