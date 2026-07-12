<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function (Blueprint $table): void {
            if (!Schema::hasColumn('users', 'fname')) {
                $table->string('fname')->nullable()->after('id');
            }
            if (!Schema::hasColumn('users', 'lname')) {
                $table->string('lname')->nullable()->after('fname');
            }
        });
    }

    public function down(): void
    {
        if (!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function (Blueprint $table): void {
            if (Schema::hasColumn('users', 'fname')) {
                $table->dropColumn('fname');
            }
            if (Schema::hasColumn('users', 'lname')) {
                $table->dropColumn('lname');
            }
        });
    }
};
