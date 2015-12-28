<?php

class BookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// Google Books Api key : AIzaSyDE2VtFAfaSUj9KHaOebAx6v2fZ3tulXyk
	public function index()
	{
		return View::make('addbook');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return Input::get("");exit();
		$book = new Books;
		$book->title= Input::get('title');
		$book->description= Input::get('description');
		$book->category=Input::get('genre');
		$book->sub_category="none";
		$book->author=Input::get('author');
		$book->condition=Input::get('cond');
		$book->location=Input::get('loc');
		$book->cover=Input::get('image');
		$book->snippet="none";
		$book->language=Input::get('lang');
		$book->popularity="none";
		$book->quantity=Input::get('quantity');
		$book->expected_price=Input::get('rate');
		$book->purpose=Input::get('purpose');
		$book->added_by="none";
		$book->save();
		echo "Book Added";

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
