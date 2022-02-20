<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrecRegFeesTable extends Migration
{
    public function up()
    {
        Schema::create('crec_reg_fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('fee_type_amt', 15, 3);
            $table->integer('fee_qty');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
