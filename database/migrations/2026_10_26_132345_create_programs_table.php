
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');

            $table->string('province')->nullable();
            $table->string('renovation_type')->nullable();

            $table->text('amount_info')->nullable();
            $table->text('eligibility')->nullable();

            $table->string('official_url')->nullable();

            $table->string('status')->default('to_verify');
            $table->date('last_verified_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
