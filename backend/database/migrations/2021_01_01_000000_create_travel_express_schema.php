<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table): void {
                $table->id();
                $table->string('fname')->nullable();
                $table->string('lname')->nullable();
                $table->string('name');
                $table->string('gender')->nullable();
                $table->bigInteger('mobile')->nullable();
                $table->bigInteger('alternate_mobile')->nullable();
                $table->string('email')->unique();
                $table->string('address')->nullable();
                $table->string('city')->nullable();
                $table->bigInteger('pincode')->nullable();
                $table->string('image')->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('role_as')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('tours')) {
            Schema::create('tours', function (Blueprint $table): void {
                $table->bigIncrements('t_id');
                $table->string('name');
                $table->longText('description');
                $table->longText('places_covered');
                $table->bigInteger('price')->default(0);
                $table->mediumText('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('packages')) {
            Schema::create('packages', function (Blueprint $table): void {
                $table->bigIncrements('p_id');
                $table->string('name');
                $table->longText('description');
                $table->longText('places_covered');
                $table->bigInteger('price')->default(0);
                $table->mediumText('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('bookings')) {
            Schema::create('bookings', function (Blueprint $table): void {
                $table->bigIncrements('booking_id');
                $table->string('trip_name');
                $table->integer('persons')->default(1);
                $table->bigInteger('mobile');
                $table->bigInteger('price');
                $table->date('journey_date');
                $table->string('status')->default('pending');
                $table->integer('trip_id')->nullable();
                $table->integer('package_id')->nullable();
                $table->integer('user_id');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('users');
    }
};
