<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrecRegPeopleTable extends Migration
{
    public function up()
    {
        Schema::create('crec_reg_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('person_id_no');
            $table->string('person_type')->nullable();
            $table->string('person_name_a');
            $table->string('person_name_l')->nullable();
            $table->date('person_birth_date')->nullable();
            $table->string('person_birth_place')->nullable();
            $table->string('person_gender')->nullable();
            $table->string('person_address_a')->nullable();
            $table->string('person_address_l')->nullable();
            $table->string('person_street')->nullable();
            $table->string('person_bldg_no')->nullable();
            $table->string('person_tel_no')->nullable();
            $table->string('person_fax_no')->nullable();
            $table->string('person_mobile_no')->nullable();
            $table->string('person_po_box')->nullable();
            $table->string('person_email')->nullable();
            $table->string('person_notes')->nullable();
            $table->string('deleg_address_a')->nullable();
            $table->string('deleg_address_l')->nullable();
            $table->string('deleg_street')->nullable();
            $table->string('deleg_bldg_no')->nullable();
            $table->string('deleg_tel_no')->nullable();
            $table->string('deleg_fax_no')->nullable();
            $table->string('deleg_mobile_no')->nullable();
            $table->string('deleg_po_box')->nullable();
            $table->string('deleg_email')->nullable();
            $table->string('deleg_website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
