<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceNeededFeesTable extends Migration
{
    public function up()
    {
        Schema::create('service_needed_fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_required')->default(0);
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
