<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegDelegatesTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_delegates', function (Blueprint $table) {
            $table->unsignedBigInteger('crec_reg_request_id');
            $table->foreign('crec_reg_request_id', 'crec_reg_request_fk_4836273')->references('id')->on('crec_reg_requests');
        });
    }
}
