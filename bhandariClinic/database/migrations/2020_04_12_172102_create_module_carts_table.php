<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_carts', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("title");
            $table->string("icon");
            $table->text("description")->nullable()->default(null);
            $table->string("module_id");
            $table->string("image")->nullable()->default(null);
            $table->tinyInteger("is_hidden")->default(0);
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
        Schema::dropIfExists('module_carts');
    }
}
