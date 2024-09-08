<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('tax_id', 15)->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('phone', 15)->nullable();
            $table->unsignedSmallInteger('rate')->default(100);
            $table->string('currency', 3)->default(config('app.currency'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'tax_id',
                'company_name',
                'phone',
                'rate',
                'currency',
            ]);
        });
    }
};
