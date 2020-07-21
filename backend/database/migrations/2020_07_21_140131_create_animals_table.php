<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->date('born_date')->nullable();
            $table->string('slug')->nullable();
            $table->string('specie')->nullable();
            $table->string('color')->nullable();
            $table->string('gender')->nullable()->comment('f - female or m - male ');
            $table->string('size')->nullable()->comment('small, medium or large');
            $table->string('coat')->nullable()->comment('short or long');
            $table->string('breed')->nullable()->comment('siberian husky, bulldog, etc');
            $table->integer('age')->nullable();
            $table->integer('age_months')->nullable();
            $table->string('age_group')->nullable()->comment('adult or puppy');
            $table->boolean('is_neutered')->default(false);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
