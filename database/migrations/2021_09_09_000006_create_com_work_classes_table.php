<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComWorkClassesTable extends Migration
{
    public function up()
    {
        Schema::create('com_work_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('work_class_desc_a');
            $table->string('work_class_desc_l')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
