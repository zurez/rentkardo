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
			$table->string('category');
			$table->string('sub_category')->default('nd');
			$table->text('author');
			$table->text('condition');
			$table->text('location');
			$table->text('cover');
			$table->text('snippet');
			$table->text('language');
			$table->integer('popularity'); //could be something
			$table->integer('quantity')->default(1); //Number of Copies ; Default 1
			$table->integer('expected_price');//if for sale?
			$table->integer('avlb')->default(1);//availibility 0 -> means unavilable
			$table->integer('t_req');//total_request

			$table->string('purpose')->default('rent'); //Sell or Exchange or Rent ; Default Rent
			$table->text('added_by'); //UserID
			$table->timestamps();
		});
	
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
