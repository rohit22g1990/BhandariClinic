<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("clinic_name");
            $table->string("contact_person");
            $table->text('address');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
            $table->string('emergency_contact_number');
            $table->string('fax')->nullable(true)->default(NULL);
            $table->string('logo')->nullable(true)->default(NULL);
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
        Schema::dropIfExists('settings');
    }
}
