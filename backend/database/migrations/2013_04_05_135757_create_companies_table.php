<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            // $table->string('name');
            $table->string('company_name')->nullable(); // razao social
            $table->string('trading_name')->nullable(); // nome fantasia
            $table->string('trading_name_slug')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('ibge_city_code')->nullable();
            $table->string('state')->nullable();
            $table->string('ibge_state_code')->nullable();
            $table->char('state_acronym', 2)->nullable();
            $table->string('zip_code')->nullable();
            $table->string('latitude')->nullable();
            $table->string('logitude')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->text('notes')->nullable();
            $table->string('cnpj_cgc')->nullable();
            $table->string('cpf', 15)->unique()->nullable();
            $table->integer('total_employees')->nullable()->default(0);
            $table->string('state_registration')->nullable();
            $table->string('city_registration')->nullable();
            $table->string('size')->nullable(); // porte
            $table->string('simple')->nullable(); // simples nacional
            $table->string('email', 50)->nullable();
            $table->string('home_page')->nullable();
            $table->string('webmail_url')->nullable();
            $table->string('facebook_fan_page')->nullable();
            $table->string('twitter_profile_url')->nullable();
            $table->string('google_profile_url')->nullable();
            $table->string('instagram_profile_url')->nullable();
            $table->string('linkedin_profile_url')->nullable();
            $table->string('skype_profile_url')->nullable();
            $table->string('pinterest_profile_url')->nullable();
            $table->string('image_storage_link')->nullable();
            $table->string('image_public_link')->nullable();
            $table->string('initial_banner_image_storage_link')->nullable();
            $table->string('initial_banner_image_public_link')->nullable();
            $table->string('main_banner_image_storage_link')->nullable();
            $table->string('main_banner_image_public_link')->nullable();
            $table->string('sponsor')->nullable(); // responsável
            $table->string('sponsor_slug')->nullable();
            $table->string('administrative_officer')->nullable();
            $table->string('administrative_officer_cpf', 15)->nullable();
            $table->string('technical_manager')->nullable();
            $table->string('technical_manager_cpf', 15)->nullable();
            $table->string('technical_manager_cref', 15)->nullable();
            $table->string('consulting_cref', 15)->nullable();
            // $table->unsignedInteger('partner_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_project_owner')->default(false);
            $table->boolean('is_legal_entity')->default(false)->comment('0 - Yes, it is | 1 - No, it\'s not ');
            $table->string('sale_type')->nullable();
            $table->string('sale_title')->nullable();
            $table->text('sale_notes')->nullable();
            $table->string('simple_fee')->nullable(); // imposto simples
            $table->string('cnae')->nullable(); // classificação nacional de atividades econômicas
            // $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('company_segment_id')->nullable();
            $table->boolean('featured')->nullable()->default(false);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('register_ip')->nullable();
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            // $table->foreign('user_id')
            //         ->references('id')->on('users')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');

            // $table->foreign('partner_id')
            //         ->references('id')->on('partners')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');

            // $table->foreign('category_id')
            //         ->references('id')->on('categories')
            //         ->onUpdate('cascade')
            //         ->onDelete('cascade');

            $table->foreign('company_segment_id')->references('id')->on('company_segments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
