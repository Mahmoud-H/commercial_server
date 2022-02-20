<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrecRegDocsTable extends Migration
{
    public function up()
    {
        Schema::create('crec_reg_docs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('docs_date')->nullable();
            $table->string('docs_ref_code')->nullable();
            $table->string('doc_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
