<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('com_currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('currency_name_a');
            $table->string('currency_name_l')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
