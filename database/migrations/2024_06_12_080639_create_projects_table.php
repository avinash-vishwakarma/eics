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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->foreignId("section_id")->references('id')->on('project_sections')->onDelete('cascade');
            $table->string("thumbnail");
            $table->string("title");
            $table->text("description");
            $table->string("completion_date")->nullable();
            $table->string("starting_date")->nullable();
            $table->string("client_name")->nullable();
            $table->string("client_url")->nullable();
            $table->string("location")->nullable();
            $table->text("full_description");
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
        Schema::dropIfExists('projects');
    }
};
