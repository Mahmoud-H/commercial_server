<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFeeTypesTable extends Migration
{
    public function up()
    {
        Schema::table('fee_types', function (Blueprint $table) {
            $table->unsignedBigInteger('fee_class_id');
            $table->foreign('fee_class_id', 'fee_class_fk_4992505')->references('id')->on('fee_classes');
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id', 'currency_fk_4992588')->references('id')->on('com_currencies');
        });
    }
}
