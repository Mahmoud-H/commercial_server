<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComGovernoratesTable extends Migration
{
    public function up()
    {
        Schema::create('com_governorates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('governorate_name_a');
            $table->string('governorate_name_l')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
