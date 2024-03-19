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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->String('user_id')->nullable();
            $table->String('name');
            $table->String('email');
            $table->String('company');
            $table->String('phone');
            $table->String('lat');
            $table->String('lng');
            $table->String('category');
            $table->Text('complaint_details');
            $table->String('Emirates');
            $table->String('complaint_status');
             $table->String('handle')->default('Not yet handled');
             $table->String('handlephone');
             $table->String('remark');
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
        Schema::dropIfExists('complaints');
    }
};
