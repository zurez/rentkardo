var app= angular.module('book',[]);
// $interpolateProvider.startSymbol('<%');
//         $interpolateProvider.endSymbol('%>');
app.controller('BookController',['$http','$scope',function($http,$scope){
	$scope.c= 1;
	$scope.d=10;
	var key = "AIzaSyDE2VtFAfaSUj9KHaOebAx6v2fZ3tulXyk";
	$scope.buttonText="Search";

$scope.populate= function(){
	var url = "https://www.googleapis.com/books/v1/volumes?q="+$scope.bookname+"&key="+key;
	$http.get(url).success(function(response){
		$scope.c= 3;
		$scope.buttonText="Add More Keywords & Search Again";
		var a= "Not Available";
		var temp = response.items[0].volumeInfo;
		$scope.title= temp.title || a;
		$scope.description= temp.description.slice(0,200) +"..."|| a;
		$scope.author = temp.authors[0] || a;
		
		$scope.image= temp.imageLinks.thumbnail || a;
		$scope.publisher= temp.publisher || a;
		$scope.pubdate= temp.publishedDate || a;
		$scope.rating=temp.averageRating || a;
		$scope.pagecount=temp.pageCount || a;
		$scope.genre= temp.categories[0]|| a ;
		// console.log($scope.description); 	
	});
	$scope.sub= function(){
		$scope.d =1
	};

};
}]);