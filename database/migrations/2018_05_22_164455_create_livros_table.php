<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration {
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('livros');
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('livros', function (Blueprint $table) {
			$table->increments('id');
			$table->string('titulo', 200);
			$table->integer('paginas');
			$table->string('autor', 100);
			$table->string('categoria', 50);
			$table->timestamps();
		});
	}
}
