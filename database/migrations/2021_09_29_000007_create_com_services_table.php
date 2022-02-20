<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComServicesTable extends Migration
{
    public function up()
    {
        Schema::create('com_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_name_a')->unique();
            $table->string('service_name_l')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
