<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComDistrictsTable extends Migration
{
    public function up()
    {
        Schema::create('com_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('district_name_a');
            $table->string('district_name_l')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
