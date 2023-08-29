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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('UserId');
            $table->string('UserName',500);
            $table->string('UserEmail',500)->unique();
            $table->string('UserCity',500);
            $table->string('UserAddress',500);
            $table->string('UserContact',500);
            $table->integer('UserAge');
            $table->enum('UserGender',['Male','Female']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
