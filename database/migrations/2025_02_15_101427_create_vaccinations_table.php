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
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->autoIncrement()->primary();;

            $table->string('name',50);
            $table->string('cnic',50);
            $table->string('dob',50);
            $table->string('gender',50);
            $table->string('email',50);
            $table->integer('phone_number');
            $table->string('address',50);
            $table->string('city',50);
            $table->string('country',50);
            $table->string('hospital',50);
            $table->string('diagnosed',50);
            $table->string('symptoms',50);
            $table->unsignedBigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
            $table->string('status',30);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccinations');
    }
};
