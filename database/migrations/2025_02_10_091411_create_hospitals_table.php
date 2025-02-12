<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();
            $table->string('hospital_name',50);
            $table->string('hospital_type',50);
            $table->string('address',50);
            $table->integer('phone_number');
            $table->string('city',50);
            $table->string('country',50);
            $table->string('logo',50);
            $table->string('website',100);
            $table->string('admin_name',50);
            $table->string('admin_email',50);
            $table->timestamps();
            $table->string('status',30);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
