<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrecRegBranchesTable extends Migration
{
    public function up()
    {
        Schema::create('crec_reg_branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('branch_no')->nullable();
            $table->string('branch_brand_name')->nullable();
            $table->date('branch_open_date')->nullable();
            $table->string('branch_address_a')->nullable();
            $table->string('branch_address_l')->nullable();
            $table->string('branch_street')->nullable();
            $table->string('branch_bldg_no')->nullable();
            $table->string('branch_tel_no')->nullable();
            $table->string('branch_fax_no')->nullable();
            $table->string('branch_mobile_no')->nullable();
            $table->string('branch_po_box')->nullable();
            $table->string('branch_email')->nullable();
            $table->string('branch_website')->nullable();
            $table->string('branch_contact_person')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
