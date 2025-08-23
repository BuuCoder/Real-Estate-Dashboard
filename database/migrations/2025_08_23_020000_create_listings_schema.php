<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateListingsSchema extends Migration
{
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedSmallInteger('property_type_id')->nullable();
            $table->unsignedSmallInteger('land_use_type_id')->nullable();
            $table->unsignedSmallInteger('legal_status_id')->nullable();
            $table->unsignedInteger('province_id')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('ward_id')->nullable();
            $table->text('street')->nullable();
            $table->text('address')->nullable();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->text('title');
            $table->text('description')->nullable();
            $table->decimal('area_land', 12, 2)->nullable();
            $table->decimal('area_built', 12, 2)->nullable();
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('road_width', 8, 2)->nullable();
            $table->boolean('frontage')->nullable();
            $table->smallInteger('bedrooms')->nullable();
            $table->smallInteger('bathrooms')->nullable();
            $table->smallInteger('floors')->nullable();
            $table->text('direction')->nullable();
            $table->decimal('price_total', 16, 2)->nullable();
            $table->decimal('price_per_m2', 16, 2)->nullable()->storedAs('CASE WHEN area_land > 0 THEN price_total / area_land END');
            $table->char('currency', 3)->default('VND');
            $table->enum('status', ['draft', 'published', 'paused', 'sold', 'expired'])->default('draft');
            $table->timestampTz('published_at')->nullable();
            $table->timestampTz('expired_at')->nullable();
            $table->timestampsTz();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('listing_id');
            $table->text('url');
            $table->boolean('is_cover')->default(false);
            $table->integer('sort_order')->default(0);
        });

        Schema::create('amenities', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('group_name')->nullable();
        });

        Schema::create('listing_amenities', function (Blueprint $table) {
            $table->unsignedBigInteger('listing_id');
            $table->unsignedSmallInteger('amenity_id');
            $table->primary(['listing_id', 'amenity_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('listing_amenities');
        Schema::dropIfExists('amenities');
        Schema::dropIfExists('images');
        Schema::dropIfExists('listings');
        // Drop ENUM type (PostgreSQL only)
        DB::statement("DROP TYPE IF EXISTS listing_status;");
    }
}
