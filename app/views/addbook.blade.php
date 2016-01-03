@extends("layouts.default")
@section('content')

	 <div id="contact-page" class="container" ng-controller= "BookController" >
    	<div class="bg" >
	    <!-- 	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>   -->  	
    		<div class="row">  	
	    		<div class="col-sm-12">
	    			
	    				<h2 class="title text-center">Add a book</h2>
	    				<input ng-model ="bookname" placeholder="Enter book name here. Be precise"type="text" class="form-control"> <br><button ng-click="populate()" class="btn btn-default">@{{buttonText}}</button>
	    		
	    			</div>
	    		</div>
	    		</div>
	    		<div class="row"><br></div>
	    		<div class="row">
	    			<div class="col-sm-7" ng-hide = "c<2">
		    			{{Form::open(array('action'=>"BookController@create",'class'=>"form-horizontal"))}}
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="title">Title:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="title" value=@{{title}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="author">Author:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="author" value=@{{author}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="genre">Genre:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="genre" value=@{{genre}} class="form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="description">Description:</label> </div>
		    				 <div class="col-sm-10"><p class="a form-control">@{{description}} > </p></div>
		    			</div>
		    			<input type="hidden" value=@{{description}} name="description">
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="publisher">Publisher:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="publisher" value=@{{publisher}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rating">Rating:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="rating" value=@{{rating}} class="a form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<input type="hidden" name ="image" value=@{{image}}>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="pubdate">Publish Date:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="pubdate" value=@{{pubdate}} class="a form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="cond">Condition of Book:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="cond" class="form-control">
		    				 	<option value="1">Excellent</option>
		    				 	<option value="2">Good</option>
		    				 	<option value="3">Fair</option>
		    				 	<option value="4">Not So Good</option>
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="loc">Your Location:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="loc" class="form-control">
		    				 	<option value="1">North Delhi</option>
		    				 	<option value="2">South Delhi</option>
		    				 	<option value="3">East Delhi</option>
		    				 	<option value="4">West Delhi</option>
		    				 	<option value="5">Central Delhi</option>
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="lang">Language of Book:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="lang" class="form-control">
		    				 	<option value="1">English</option>
		    				 	<option value="2">Hindi</option>
		    			
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="purpose">Purpose:</label> </div>
		    				 <div class="col-sm-10"><select type="select" name="purpose" class="form-control">
		    				 	<option value="1">Rent</option>
		    				 	<option value="2">Sell</option>
		    				 	<option value="3">Both</option>
		    		
		    				 	</select>
		    				 </div>

		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Quantity:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="quantity" value="1" class="form-control" ng-disabled="d>2"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Expected Rate:</label> </div>
		    				 <div class="col-sm-10"><input type="text" name="rate" placeholder="In Rupees" class="form-control"></div>
		    			</div>
		    			<div class="form-group">
		    				 <div class="col-sm-2"><label class="control-label" for="rate">Cover:</label> </div>
		    				 <div class="col-sm-10"><img ng-src=@{{image}}></div>
		    			</div>
		    			<div class="form-group col-sm-offset-2 "><input ng-click= "sub()"type="submit" value=" Add the Book" class="btn btn-success"> </div>
		    			
		    			{{Form::close()}}
			    	
			    			
			    		

	    			</div>
	    			
	    		</div>
	    		<div class="row">

	    			
	    		</div>
	    		
	    			</div> 
    			</div>    			
	    	</div>  
    	</div>	
    </div>

@stop