@extends("layouts.default")
@section('content')

	
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						{{Form::open(array('url'=>'account'))}}
							<input type="text" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" name ="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<input type="submit" class="btn btn-success" value="Login">
						{{Form::close()}}
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						{{Form::open(array('url'=>'signup'))}}
							<input type="text" name="name" placeholder="Name"/>
							<input type="email" name = "email" placeholder="Email Address"/>
							<input type="password" name ="password" placeholder="Password"/>

							<input type="submit" class="btn btn-primary" value = "Signup">
						{{Form::close()}}
					</div><!--/sign up form-->
				</div>
			</div>
		@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
	

	@stop