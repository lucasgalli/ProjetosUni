<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
	{
		Schema::create('donations', function (Blueprint $table) {
			$table->id();
			$table->string('item_name');
			$table->text('description')->nullable();
			$table->string('item_type');
			$table->enum('status', ['available', 'received'])->default('available');
			$table->date('donation_date');
			$table->timestamps();
		});
	}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
