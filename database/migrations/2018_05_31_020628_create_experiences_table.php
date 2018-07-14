<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('org_name', 100);
            $table->string('title', 100);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->mediumText('description');
            $table->string('address', 100);
            $table->boolean('is_deleted')->default(0);
            $table->timestamps();

            $table->unsignedInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members')
                    ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
