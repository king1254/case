<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('clients', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');

			$table->integer('division_id')->nullable()->unsigned();
			$table->foreign('division_id')->references('id')
				->on('divisions')	->onDelete('cascade')
						->onUpdate('cascade');

			$table->integer('district_id')->nullable()->unsigned();
			$table->foreign('district_id')->references('id')
				->on('districts')	->onDelete('cascade')
						->onUpdate('cascade');

			$table->string('mobile')->nullable();
			$table->string('email')->nullable();
			$table->string('gender', 15)->nullable();
			$table->text('address')->nullable();
			$table->longText('description')->nullable();
			$table->string('file')->nullable();
			$table->date('date')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('clients');
	}
}
