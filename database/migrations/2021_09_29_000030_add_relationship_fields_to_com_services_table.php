<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToComServicesTable extends Migration
{
    public function up()
    {
        Schema::table('com_services', function (Blueprint $table) {
            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id', 'account_fk_4991964')->references('id')->on('com_accounts');
        });
    }
}
