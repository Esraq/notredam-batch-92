<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('college_roll_no');
            $table->integer('nid_card_no');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('spouse_name');
            $table->integer('children_no');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('profession');
            $table->string('designation');
            $table->integer('phone');
            $table->string('email');
            $table->string('blood_group');
            $table->string('member_fee');
            $table->date('registration_date');
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
        Schema::dropIfExists('members');
    }
}
