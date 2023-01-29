<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('name');
            $table->string('labor_tailor');
            $table->string('labor_cutter');
            $table->string('labor_heatpress');
            $table->string('cost_tailor');
            $table->string('cost_cutter');
            $table->string('cost_heatpress');
            $table->string('price');
            $table->string('category');
            $table->timestamps();
            $table->foreign('member_id')->on('members')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('employee_id')->on('employees')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
