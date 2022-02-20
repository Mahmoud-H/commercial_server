<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('com_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_code')->unique();
            $table->string('account_name');
            $table->string('account_address_a')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
