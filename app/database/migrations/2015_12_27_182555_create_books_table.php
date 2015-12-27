<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create the books table
		Schema::create('books',function($table)
		{
			$table->increments('id'); //Autoincremented primary key
			$table->string('title');
			$table->string('description');
			$table->text('category');
			$table->text('sub_category');
			$table->text('author');
			$table->text('condition');
			$table->text('location');
			$table->text('cover');
			$table->text('snippet');
			$table->text('language');
			$table->integer('popularity'); //could be something
			$table->integer('quantity'); //Number of Copies ; Default 1
			$table->integer('expected_price');
			$table->string('purpose'); //Sell or Exchange or Rent ; Default Rent
			$table->text('added_by'); //UserID
			$table->timestamps();
		});
	}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books'); //Drop table `books
	}

}