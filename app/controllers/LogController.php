<?php

class LogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function login()
		{

		// validate the info, create rules for the inputs
		$rules = array(
		    'email'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {

		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

		    // create our user data for the authentication
		    $userdata = array(
		        'email'     => Input::get('email'),
		        'password'  => Input::get('password')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata)) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        // return Redirect::to('secure');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        $name = Auth::user()->name;
		        $userid= Auth::user()->userid;
		        $t= $userid."_books";
		        $value= DB::table($t)->get();

		        return View::make('account')->with(array('name'=>$name,'value'=>$value));

		    } else {        

		        // validation not successful, send back to form
		         
		        return Redirect::to('login')->withErrors(array('message'=>'Invalid credentials'));

		    }

}
}
	public function logout()
	{
		Auth::logout();
		return View::make('login')->with(array('message'=>'You have successfully logged out!'));
	}
	public function create()
	{

		$rules = array(
		        
		        'password'=>'required',
		        'name'=>'required',
		        'email'=>'required|email|unique:users'
        );
		// 
				// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {

		    return Redirect::to('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		}
		else{

		DB::transaction(function()
			{
				$userid= str_random(10);
				//Add the user to user database
				$user= new User();
				$user->name= Input::get('name');
				$user->email= Input::get('email');
				$user->password=Hash::make(Input::get('password'));
			
				$user->userid=$userid;
				$user->save();
				$w_table= $userid."_wishlist";
				$m_books= $userid."_books";
				$r_books=$userid."_requests";
		
				//Create a booklist
				Schema::create($m_books,function($table){
					$table->engine = "InnoDB"; 
					$table->increments('id'); //Autoincremented primary key
					$table->string('title');
				
				
				
					$table->text('author');
					$table->text('condition');
					$table->text('location');
	
			
					$table->text('language');
			
					$table->integer('quantity')->default(1); //Number of Copies ; Default 1
					$table->integer('expected_price');//if for sale?
					$table->integer('avlb')->default(1);//availibility 0 -> means unavilable
					$table->integer('t_req');//total_request

					$table->string('purpose')->default('rent'); //Sell or Exchange or Rent ; Default Rent
					$table->timestamps();
				});
				//Create a request table
				Schema::create($r_books,function($y){
					$y->increments('id'); //Autoincremented primary key
					$y->string('bookid');
					$y->string('title');
					$y->text('author');
					$y->text('language');
					$y->engine = "InnoDB";



					$y->timestamps();
				});
				//Create a wishlist table
				Schema::create($w_table,function($t){
					$t->increments('id'); //Autoincremented primary key
					$t->string('title');
					$t->string('author');
					$t->string('lang');
					$t->engine = "InnoDB";
					$t->timestamps();
				});
				//Send Mail
				$email= Input::get('email');
				// Mailgun::send('emails.welcomemail', array('name'=>Input::get('name')), function($message) use ($email){
    //                  $message->to($email,"Hey")->subject('Welcome!');});//mail
			});//transaction
		}
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
