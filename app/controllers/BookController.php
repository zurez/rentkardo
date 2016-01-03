<?php

class BookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
			  {
			    # code...
			    $this->beforeFilter('admin');
			  }
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
	public function message()
	{
		return View::make('message');
	}
	public function create()
	{
		$userid= Auth::user()->userid;
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
		$book->added_by=$userid; //The USERID
		$book->save();
		//Add Book to Personal Info of the User

		$tn=$userid."_books";
		DB::table($tn)->insert(array(
			'title'=>Input::get('title'),'author'=>Input::get("author"),'condition'=>Input::get('cond'),'location'=>Input::get('loc'),'language'=>Input::get('lang'),'quantity'=>Input::get('quantity'),'expected_price'=>Input::get('rate'),'avlb'=>1
			));

	}

	public function request($id)
	{	
		//Get Book info
		$title= DB::table('books')->where('id',$id)->pluck('title');
		$author= DB::table('books')->where('id',$id)->pluck('author');
		$lang= DB::table('books')->where('id',$id)->pluck('language');
		//Get user id through book id
		$user = DB::table('books')->where('id',$id)->pluck('added_by');
		//Get user email through book mail
		$emailid=DB::table('users')->where('userid',$user)->pluck('email');
		$name = DB::table('users')->where('userid',$user)->pluck('name');
		echo "Mail Sent". $emailid;
		//Send mail
	// 	Mailgun::send(
	// 		'emails.requestmail', array('name'=>$name, function($message) use ($emailid,$name,$title,$author, $lang)
	// 						{
 //                    			 $message->to($email,"Notification")->subject('Request for Book!');
 //                    		}
 //                     );//mailt
		//Add it to the request section of the user 
		$tn= $user."_requests";
		DB::table($tn)->insert(array('bookid'=>$id,'title'=>$title,'author'=>$author,'language'=>$lang));
		return Redirect::to('message')->withErrors(array('message'=>'Your request was successfully placed'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function wishlist($id)
	{	
		//Get user id
		$userid= Auth::user()->userid;
		$tn= $userid."_wishlist";
		//Get Book info 
			//Get Book info
		$title= DB::table('books')->where('id',$id)->pluck('title');
		$author= DB::table('books')->where('id',$id)->pluck('author');
		$lang= DB::table('books')->where('id',$id)->pluck('language');
		//Add to wishlist 
		DB::table($tn)->insert(array('bookid'=>$id,'title'=>$title,'author'=>$author,'language'=>$lang));
		echo "The book has been added to your wishlist";
		echo "You are being redirected to the home page";
		return Redirect::to('message')->withErrors(array('message'=>'Your book was added to your wishlist'));
	}

}
