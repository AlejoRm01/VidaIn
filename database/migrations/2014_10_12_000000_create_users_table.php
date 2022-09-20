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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('city');
            $table->string('address');
            $table->string('phone');
            $table->string('document');
            $table->string('age');
            $table->string('weight');
            $table->string('comorbidities');
            $table->string('role')->default('user');
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
        Schema::dropIfExists('users');
        $table->dropColumn(['city']); 
        $table->dropColumn(['address']); 
        $table->dropColumn(['age']);
        $table->dropColumn(['weight']);
        $table->dropColumn(['comorbidities']);   
        $table->dropColumn(['phone']); 
        $table->dropColumn(['document']); 
        $table->dropColumn(['role']); 
    }
};
