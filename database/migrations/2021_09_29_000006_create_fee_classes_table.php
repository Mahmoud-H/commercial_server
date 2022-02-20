<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeClassesTable extends Migration
{
    public function up()
    {
        Schema::create('fee_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fee_class_name_a');
            $table->string('fee_class_name_l')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
