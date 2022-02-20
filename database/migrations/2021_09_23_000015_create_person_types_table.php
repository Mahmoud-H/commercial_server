<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonTypesTable extends Migration
{
    public function up()
    {
        Schema::create('person_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('person_type_name_a')->unique();
            $table->string('person_type_name_l')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
