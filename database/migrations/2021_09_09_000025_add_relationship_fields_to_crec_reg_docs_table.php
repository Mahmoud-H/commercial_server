<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrecRegDocsTable extends Migration
{
    public function up()
    {
        Schema::table('crec_reg_docs', function (Blueprint $table) {
            $table->unsignedBigInteger('crec_reg_request_id');
            $table->foreign('crec_reg_request_id', 'crec_reg_request_fk_4836559')->references('id')->on('crec_reg_requests');
            $table->unsignedBigInteger('neededdoc_id');
            $table->foreign('neededdoc_id', 'neededdoc_fk_4836560')->references('id')->on('com_needed_docs');
        });
    }
}
