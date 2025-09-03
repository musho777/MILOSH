<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('article')->nullable();
            $table->string('name')->nullable();
            $table->string('series')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->float('size_guide_height')->nullable();
            $table->float('size_guide_length')->nullable();
            $table->float('size_guide_width')->nullable();
            $table->float('handle_length')->nullable();
            $table->text('features')->nullable();
            $table->string('color')->nullable();
            $table->string('decoration')->nullable();
            $table->string('print')->nullable();
            $table->year('release_year')->nullable();
            $table->string('edition')->nullable();
            $table->string('brand_country')->nullable();
            $table->string('manufacturer_country')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->text('package_description')->nullable();
            $table->string('package_type')->nullable();
            $table->float('package_height')->nullable();
            $table->float('package_length')->nullable();
            $table->float('package_width')->nullable();
            $table->integer('weight')->nullable();
            $table->text('set')->nullable();
            $table->text('care_instructions')->nullable();
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};

