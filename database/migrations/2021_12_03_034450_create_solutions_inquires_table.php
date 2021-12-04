<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsInquiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions_inquires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('email')->nullable();
            $table->text('solution')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('message');
            $table->text('status');
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
        Schema::dropIfExists('solutions_inquires');
    }
}
