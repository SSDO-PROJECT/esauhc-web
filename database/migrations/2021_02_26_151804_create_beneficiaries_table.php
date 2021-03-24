<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('plan');
            $table->integer('nin_number');
            $table->text('beneficiary_id')->unique();
            $table->string('agent_id');
            $table->string('beneficiary_ref')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('dob');
            $table->string('mobile_no');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('sex');
            $table->string('marital_status');
            $table->text('address');
            $table->string('lga');
            $table->string('ward');
            $table->string('employment_status');
            $table->string('name_employer_school');
            $table->string('address_employer_school');
            $table->string('file_path');
            $table->string('occupation');
            $table->string('genotype');
            $table->string('blood_group');
            $table->string('allergies');
            $table->string('health_condition');
            $table->string('disability');
            $table->string('surgery');
            $table->string('surgery_type');
            $table->integer('year_surgery');
            $table->string('status')->default('pending');
            $table->date('activate_on');
            $table->date('expire_on');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
