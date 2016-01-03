<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('addbook');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		//Get Form Data 
		$title= Input::get('title');
		$description= Input::get('description');
		$category=Input::get('genre');
		$sub_category="none";
		$author=Input::get('author');
		$condition=Input::get('cond');
		$location=Input::get('loc');
		$cover=Input::get('image');
		$snippet="none";
		$language=Input::get('lang');
		$popularity="none";
		$quantity=Input::get('quantity');
		$expected_price=Input::get('rate');
		$purpose=Input::get('purpose');

		//Add book to user's personal record 

		$username = Auth::user()->username;
		$tn = $username+"_"+"books";//tableName

		DB::table($tn)

		// Add book to Web Database

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
		$book->added_by=$userID;
		$book->save();
		echo "Book Added";
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

// Wishlist

	public function wishlist()
	{
		$username= Auth::user()->username;
		$tn= $username+"_"+"wishlist";
		$wish= DB::table($tn)->get();
		return View::make('wishlist')->with(array('wish'=>$wish)); 	
	}
	/**
	 * Remove the specified resource from storage. eg: book from the wishlist
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$username= Auth::user()->username;
		$tn= $username+"_"+"wishlist";

		DB::table($tn)->where('id', '=',$id)->delete();
	}


}
