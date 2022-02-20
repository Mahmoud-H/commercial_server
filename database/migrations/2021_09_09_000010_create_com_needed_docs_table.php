<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComNeededDocsTable extends Migration
{
    public function up()
    {
        Schema::create('com_needed_docs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('needed_doc_name_a');
            $table->string('needed_doc_name_l')->nullable();
            $table->boolean('needed_doc_is_required')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
