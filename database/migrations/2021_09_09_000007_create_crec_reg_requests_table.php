<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrecRegRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('crec_reg_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crec_code')->nullable();
            $table->string('crec_appl_no')->nullable();
            $table->date('crec_appl_date');
            $table->string('crec_register_no')->unique();
            $table->string('crec_comp_name_a');
            $table->string('crec_comp_name_l')->nullable();
            $table->string('crec_comp_name_h')->nullable();
            $table->date('crec_start_date')->nullable();
            $table->string('crec_brand_name')->nullable();
            $table->string('crec_address_a')->nullable();
            $table->string('crec_address_l')->nullable();
            $table->string('crec_street')->nullable();
            $table->string('crec_bldg_no')->nullable();
            $table->string('crec_tel_no')->nullable();
            $table->string('crec_fax_no')->nullable();
            $table->string('crec_mobile_no')->nullable();
            $table->string('crec_po_box')->nullable();
            $table->string('crec_email')->nullable();
            $table->string('crec_website')->nullable();
            $table->string('crec_applicant_id_no');
            $table->string('crec_applicant_name')->nullable();
            $table->date('crec_end_date')->nullable();
            $table->string('crec_notes')->nullable();
            $table->string('crec_work_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
